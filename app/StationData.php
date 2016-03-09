<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StationData extends Model
{
    protected $table = 'station_data';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'station_id', 'athlete_id', 'data',
    ];

    /**
        RELATIONSHIPS
     */

    public function station(){
        return $this->belongsTo('App\Station');
    }

    public function athlete(){
        return $this->belongsTo('App\Athlete');
    }

    /**
        METHODS
     */
}
