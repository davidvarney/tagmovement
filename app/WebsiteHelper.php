<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Mailchimp;

class WebsiteHelper extends Model
{
    /**
     * Get an array of subscribers for a given list id.
     * $list_id default: env('MAILCHIMP_LIST_ID')
     *
     * @author David Varney
     * @param str $list_id
     * @return mixed bool|array $subscribers
     */
    public static function get_mailchimp_subscribers($list_id = null)
    {
        if (empty($list_id)) {
            $list_id = env('MAILCHIMP_LIST_ID');
        }
        $mailchimp = new Mailchimp;

        $subscribers = $mailchimp->lists->members($list_id);

        if (array_key_exists('data', $subscribers) && count($subscribers)) {
            return $subscribers['data'];
        }

        return false;
    }

    /**
     * Get an array of subscribers for a given list id and set of emails.
     * $list_id default: env('MAILCHIMP_LIST_ID')
     *
     * @author David Varney
     * @param mixed str|array $emails
     * @param str $list_id
     * @return mixed bool|array $subscribers
     */
    public static function get_mailchimp_subscribers_from_email($emails, $list_id = null)
    {
        if (!empty($emails)) {
            if (!is_array($emails)) {
                $emails = array(array('email' => $emails));
            } else {
                $formatted_emails = array();
                foreach ($emails as $email) {
                    $formatted_emails[] = array('email' => $email);
                }
                $emails = $formatted_emails;
            }

            if (empty($list_id)) {
                $list_id = env('MAILCHIMP_LIST_ID');
            }
            $mailchimp = new Mailchimp;

            $subscribers = $mailchimp->lists->memberInfo($list_id, $emails);

            if (array_key_exists('data', $subscribers) && count($subscribers['data']) > 0) {
                return $subscribers['data'];
            }
        }

        return false;
    }

    /**
     * Checks to see if a subscriber exists for a particular list id based on an email
     * $list_id default: env('MAILCHIMP_LIST_ID')
     *
     * @author David Varney
     * @param str $email
     * @param mixed bool|str $list_id
     * @return bool
     */
    public static function mailchimp_subscriber_exists($email, $list_id = null)
    {
        if (!empty($email)) {
            $email = array(array('email' => $email));

            if (empty($list_id)) {
                $list_id = env('MAILCHIMP_LIST_ID');
            }
            $mailchimp = new Mailchimp;

            $subscribers = $mailchimp->lists->memberInfo($list_id, $email);

            if (array_key_exists('data', $subscribers) && count($subscribers['data']) > 0) {
                return true;
            }
        }

        return false;
    }
}
