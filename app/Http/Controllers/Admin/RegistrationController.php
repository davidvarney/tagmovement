<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Registration;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::get();

        return view('admin.registrations.index', array(
            'title' => 'Admin: Registrations',
            'registrations' => $registrations
        ));
    }
}
