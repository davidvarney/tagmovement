<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

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
            'title' => 'Admin: Users Create'
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        dd($data);
    }

    public function update()
    {

    }

    public function edit()
    {

    }

    public function destroy()
    {

    }
}
