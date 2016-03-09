<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Role;

class UsersController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Our index page listing all users
     *
     * @author David Varney
     */
    public function index()
    {
        $users = User::get();

        return view('admin.users.index', array(
            'title' => 'Admin: Users',
            'users' => $users
        ));
    }

    public function create()
    {
        return view('admin.users.create', array(
            'title' => 'Admin: Users Create',
            'roles' => Role::lists('display_name', 'id')
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();
        //dd($data);
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt('changeme'),
        ]);

        // Assign the role
        $user->attachRole($data['role_id']);

        return redirect()->route('admin_users_index');


    }

    public function update($user_id, Request $request)
    {
        $user = User::find($user_id);

        $data = $request->all();

        $user->update($data);

        // Remove current roles
        $user->detachRoles();
        // Assign passed role
        $user->attachRole($data['role_id']);

        return redirect()->back();
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);

        return view('admin.users.edit', array(
            'title' => 'Admin: User Edit - ' . $user->name,
            'user'  => $user,
            'roles' => Role::lists('display_name', 'id')
        ));
    }

    public function destroy($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect()->back();
    }
}
