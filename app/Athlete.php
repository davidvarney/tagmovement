<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $table = 'athletes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'registration_id',
    ];

    /**
        RELATIONSHIPS
     */

    public function registration(){
        return $this->belongsTo('App\Registration');
    }

    public function station_data(){
        return $this->hasMany('App\StationData', 'athlete_id');
    }

    /**
        METHODS
     */
}
