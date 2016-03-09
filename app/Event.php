<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
        RELATIONSHIPS
     */

    public function registrations(){
        return $this->hasMany('App\Registration', 'event_id');
    }

    public function stations(){
        return $this->hasMany('App\Station', 'event_id');
    }

    /**
        METHODS
     */
}
