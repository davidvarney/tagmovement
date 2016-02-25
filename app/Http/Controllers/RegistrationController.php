<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CreateRegistrationRequest;
use App\Http\Controllers\Controller;

use App\Registration;

class RegistrationController extends Controller
{
    public function store(CreateRegistrationRequest $request)
    {
        $data = $request->all();

        dd($data);
    }
}
