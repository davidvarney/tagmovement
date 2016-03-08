<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\FormHelper;

class HomeController extends Controller
{
    /**
     * Adds an opportunity to pass any data from models
     *
     * @author David Varney
     */
    public function home()
    {

        return view('layouts.frontend_app', array(
            'states' => FormHelper::get_states(),
            'graduation_years' => FormHelper::get_graduation_years(),
            'genders' => FormHelper::get_genders(),
            'shirt_sizes' => FormHelper::get_shirt_sizes(),
        ));
    }
}
