<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SubmitContactRequest;
use App\Http\Controllers\Controller;

use Mail;

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

        $subject = 'TAGMovement.org - Contact Form Submission';

        // We want to email the sender of this as well as sending an email to the site's user(s)

        // First, we'll send one to the site's user(s)
        Mail::send('emails.contact', ['data' => $data], function ($m) use ($data, $subject) {
            $m->from('noreply@tagmovement.org');

            $m->to(env('MAIL_CONTACT_FORM_TO_ADDRESS'))->subject($subject);
        });

        Mail::send('emails.contact_thank_you', ['data' => $data], function ($m) use ($data, $subject) {
            $m->from('noreply@tagmovement.org');

            $m->to(env('MAIL_CONTACT_FORM_TO_ADDRESS'))->subject($subject);
        });

        return true;
    }
}
