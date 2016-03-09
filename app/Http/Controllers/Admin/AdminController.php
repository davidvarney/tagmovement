<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Registration;

class AdminController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $latest_registrations = Registration::take(10)->orderBy('created_at', 'desc')->get();
        $registrations = Registration::get();

        return view('admin.index', array(
            'title' => 'Admin: Dashboard',
            'registrations_count' => ($registrations && $registrations->count() > 0) ? $registrations->count() : 0,
            'latest_registrations' => $latest_registrations
        ));
    }
}
