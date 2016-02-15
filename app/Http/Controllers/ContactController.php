<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SubmitContactRequest;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     *
     *
     * @author David Varney
     */
    public function store(SubmitContactRequest $request)
    {
        $data = $request->all();

        dd($data);
    }
}
