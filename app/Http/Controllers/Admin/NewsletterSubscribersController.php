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

        $mailchimp_creation_count = 0;
        $mailchimp_update_count = 0;
        $subscriber_creation_count = 0;

        foreach ($registrations as $registration) {
            // Athlete - first create the newsletter subscriber record
            if (!filter_var($registration->email, FILTER_VALIDATE_EMAIL) === false) {
                $athlete_subscriber = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->email))->first();
                if (! $athlete_subscriber) {
                    $athlete_subscriber = NewsletterSubscriber::create(array(
                        'registration_id'   => $registration->id,
                        'first_name'        => $registration->first_name,
                        'last_name'         => $registration->last_name,
                        'email'             => str_replace(" ", '', $registration->email)
                    ));
                    $subscriber_creation_count++;
                }
                // Athlete - then officially add them to MailChimp
                if (WebsiteHelper::mailchimp_subscriber_exists($athlete_subscriber->email)) {
                    Newsletter::updateMember($athlete_subscriber->email, array('FNAME' => $athlete_subscriber->first_name, 'LNAME' => $athlete_subscriber->last_name));
                    $mailchimp_update_count++;
                } else {
                    Newsletter::subscribe($athlete_subscriber->email, array('FNAME' => $athlete_subscriber->first_name, 'LNAME' => $athlete_subscriber->last_name));
                    $mailchimp_creation_count++;
                }
            }

            if (!filter_var($registration->guardian_1_email, FILTER_VALIDATE_EMAIL) === false) {
                // Guardian 1 - first create the newsletter subscriber record
                $guardian_1_subscriber = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->guardian_1_email))->first();
                if (! $guardian_1_subscriber) {
                    $guardian_1_subscriber = NewsletterSubscriber::create(array(
                        'registration_id'   => $registration->id,
                        'first_name'        => $registration->guardian_1_first_name,
                        'last_name'         => $registration->guardian_1_last_name,
                        'email'             => str_replace(" ", '', $registration->guardian_1_email)
                    ));
                    $subscriber_creation_count++;
                }

                // Guardian 1 - then officially add them to MailChimp
                if (WebsiteHelper::mailchimp_subscriber_exists($guardian_1_subscriber->email)) {
                    Newsletter::updateMember($guardian_1_subscriber->email, array('FNAME' => $guardian_1_subscriber->first_name, 'LNAME' => $guardian_1_subscriber->last_name));
                    $mailchimp_update_count++;
                } else {
                    Newsletter::subscribe($guardian_1_subscriber->email, array('FNAME' => $guardian_1_subscriber->first_name, 'LNAME' => $guardian_1_subscriber->last_name));
                    $mailchimp_creation_count++;
                }
            }
            // Only add the guardian 2 if they have an email present
            if (!filter_var($registration->guardian_2_email, FILTER_VALIDATE_EMAIL) === false) {
                $guardian_2_subscriber = NewsletterSubscriber::where('email', '=', str_replace(" ", '', $registration->guardian_2_email))->first();
                if (! $guardian_2_subscriber) {
                    // Guardian 2 - first create the newsletter subscriber record
                    $guardian_2_subscriber = NewsletterSubscriber::create(array(
                        'registration_id'   => $registration->id,
                        'first_name'        => $registration->guardian_2_first_name,
                        'last_name'         => $registration->guardian_2_last_name,
                        'email'             => str_replace(" ", '', $registration->guardian_2_email)
                    ));
                    $subscriber_creation_count++;
                }

                // Guardian 2 - then officially add them to MailChimp
                if (WebsiteHelper::mailchimp_subscriber_exists($guardian_2_subscriber->email)) {
                    Newsletter::updateMember($guardian_2_subscriber->email, array('FNAME' => $guardian_2_subscriber->first_name, 'LNAME' => $guardian_2_subscriber->last_name));
                    $mailchimp_update_count++;
                } else {
                    Newsletter::subscribe($guardian_2_subscriber->email, array('FNAME' => $guardian_2_subscriber->first_name, 'LNAME' => $guardian_2_subscriber->last_name));
                    $mailchimp_creation_count++;
                }
            }
        }

        if ($subscriber_creation_count > 0 || $mailchimp_creation_count > 0 || $mailchimp_update_count > 0) {
            \Flash::success("New Subscribers: " . $subscriber_creation_count . " New MailChimp Subscribers: " . $mailchimp_creation_count . " Updated MailChimp Subscribers: " . $mailchimp_update_count);
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

    public function destroy($newsletter_subscriber_id)
    {
        $newsletter_subscriber = NewsletterSubscriber::find($newsletter_subscriber_id);

        if ($newsletter_subscriber->unsubscribe == 0) {
            Newsletter::unsubscribe($newsletter_subscriber->email);
        }

        $newsletter_subscriber->delete();

        \Flash::success("Subscriber has been deleted!");

        return redirect()->back();
    }
}
