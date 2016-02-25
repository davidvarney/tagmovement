<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateRegistrationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
            'address_1' => 'required',
            'address_2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:registrations',
            'gender' => 'required',
            'birthdate' => 'required',
            'graduation_year' => 'required',
            'high_school_state' => 'required',
            'high_school_name' => 'required',
            'guardian_1_first_name' => 'required',
            'guardian_1_last_name' => 'required',
            'guardian_1_email' => 'required',
            'guardian_1_phone' => 'required',
            'position' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'text_agreement' => 'required',
            'event_waiver_agreement' => 'required',
            'shirt_size' => 'required',
            'registrant_verify' => 'required',
            'coach_name' => 'required'
        ];
    }
}
