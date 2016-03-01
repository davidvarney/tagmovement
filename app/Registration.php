<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';

    protected $fillable = [
        'first_name',
        'last_name',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'phone',
        'email',
        'gender',
        'birthdate',
        'graduation_year',
        'high_school_state',
        'high_school_name',
        'guardian_1_first_name',
        'guardian_1_last_name',
        'guardian_1_email',
        'guardian_1_phone',
        'guardian_2_first_name',
        'guardian_2_last_name',
        'guardian_2_email',
        'guardian_2_phone',
        'gpa',
        'sat_score',
        'act_score',
        'position',
        'height',
        'weight',
        'twitter_link',
        'facebook_link',
        'instagram_link',
        'snapchat_name',
        'youtube_link',
        'text_agreement',
        'event_waiver_agreement',
        'shirt_size',
        'hudl_email',
        'hudl_film_link',
        'coach_name',
        'coach_phone',
        'coach_email',
        'favorite_colleges',
        'college_offers',
        'offensive_stats',
        'defensive_stats',
        'postseason_honors',
        'jersey_number'

    ];

    protected $guarded = ['id'];
}
