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

        // Make sure the birthdate is properly formatted
        $data['birthdate'] = date("Y-m-d", strtotime($data['birthdate']));

        $registration = Registration::create($data);

        return response()->json(array(true));
    }
}
