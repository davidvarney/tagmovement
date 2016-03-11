<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\NewsletterSubscriber;
use App\Registration;
use Newsletter;
use App\WebsiteHelper;

class NewsletterSubscribersController extends Controller
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

    public function index()
    {
        $newsletter_subscribers = NewsletterSubscriber::get();

        return view('admin.newsletter_subscribers.index', array(
            'title' => 'Admin: Newsletter Subscribers',
            'newsletter_subscribers' => $newsletter_subscribers
        ));
    }

    public function store()
    {
        $registrations = Registration::get();

        $creation_count = 0;

        foreach ($registrations as $registration) {
            // Athlete - first create the newsletter subscriber record
            $athlete_check = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->email))->first();
            if (! $athlete_check) {
                $athlete_subscriber = NewsletterSubscriber::create(array(
                    'registration_id'   => $registration->id,
                    'first_name'        => $registration->first_name,
                    'last_name'         => $registration->last_name,
                    'email'             => str_replace(" ", '', $registration->email)
                ));
                // Athlete - then officially add them to MailChimp
                if (WebsiteHelper::mailchimp_subscriber_exists($athlete_subscriber->email)) {
                    Newsletter::updateMember($athlete_subscriber->email, array('FNAME' => $athlete_subscriber->first_name, 'LNAME' => $athlete_subscriber->last_name));
                } else {
                    Newsletter::subscribe($athlete_subscriber->email, array('FNAME' => $athlete_subscriber->first_name, 'LNAME' => $athlete_subscriber->last_name));
                }
                $creation_count++;
            }
            // Guardian 1 - first create the newsletter subscriber record
            $guardian_1_check = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->guardian_1_email))->first();
            if (! $guardian_1_check) {
                $guardian_1_subscriber = NewsletterSubscriber::create(array(
                    'registration_id'   => $registration->id,
                    'first_name'        => $registration->guardian_1_first_name,
                    'last_name'         => $registration->guardian_1_last_name,
                    'email'             => str_replace(" ", '', $registration->guardian_1_email)
                ));
                // Guardian 1 - then officially add them to MailChimp
                if (WebsiteHelper::mailchimp_subscriber_exists($guardian_1_subscriber->email)) {
                    Newsletter::updateMember($guardian_1_subscriber->email, array('FNAME' => $guardian_1_subscriber->first_name, 'LNAME' => $guardian_1_subscriber->last_name));
                } else {
                    Newsletter::subscribe($guardian_1_subscriber->email, array('FNAME' => $guardian_1_subscriber->first_name, 'LNAME' => $guardian_1_subscriber->last_name));
                }
                $creation_count++;
            }
            // Only add the guardian 2 if they have an email present
            if (!empty($registration->guardian_2_email)) {
                $guardian_2_check = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->guardian_2_email))->first();
                if (! $guardian_2_check) {
                    // Guardian 2 - first create the newsletter subscriber record
                    $guardian_2_subscriber = NewsletterSubscriber::create(array(
                        'registration_id'   => $registration->id,
                        'first_name'        => $registration->guardian_2_first_name,
                        'last_name'         => $registration->guardian_2_last_name,
                        'email'             => str_replace(" ", '', $registration->guardian_2_email)
                    ));
                    // Guardian 2 - then officially add them to MailChimp
                    if (WebsiteHelper::mailchimp_subscriber_exists($guardian_2_subscriber->email)) {
                        Newsletter::updateMember($guardian_2_subscriber->email, array('FNAME' => $guardian_2_subscriber->first_name, 'LNAME' => $guardian_2_subscriber->last_name));
                    } else {
                        Newsletter::subscribe($guardian_2_subscriber->email, array('FNAME' => $guardian_2_subscriber->first_name, 'LNAME' => $guardian_2_subscriber->last_name));
                    }
                    $creation_count++;
                }
            }
        }

        if ($creation_count > 0) {
            \Flash::success("There were " . $creation_count . " subscribers added!");
        } else {
            \Flash::error("Looks like there weren't any subscribers added!");
        }

        return redirect()->back();
    }

    public function unsubscribe($newsletter_subscriber_id)
    {
        $newsletter_subscriber = NewsletterSubscriber::find($newsletter_subscriber_id);

        if ($newsletter_subscriber->unsubscribe == 0) {
            $newsletter_subscriber->update(array('unsubscribe' => 1));
            \Flash::error($newsletter_subscriber->first_name . " " . $newsletter_subscriber->last_name . " has been unsubscribed!");
            Newsletter::unsubscribe($newsletter_subscriber->email);
        } else {
            $newsletter_subscriber->update(array('unsubscribe' => 0));
            \Flash::success($newsletter_subscriber->first_name . " " . $newsletter_subscriber->last_name . " has been subscribed!");
            Newsletter::subscribe($newsletter_subscriber->email, array('FNAME' => $newsletter_subscriber->first_name, 'LNAME' => $newsletter_subscriber->last_name));
        }

        return redirect()->back();
    }
}
