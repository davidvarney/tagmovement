<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsletterSubscriber extends Model
{
    protected $table = 'newsletter_subscribers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_id',
        'first_name',
        'last_name',
        'email',
        'unsubscribe',
        'mailchimp_list_user_id'
    ];

    /**
        RELATIONSHIPS
     */

    public function registration(){
        return $this->belongsTo('App\Registration');
    }

    /**
        METHODS
     */
}
