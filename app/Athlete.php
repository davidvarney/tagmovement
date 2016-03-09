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

    public function event(){
        return $this->belongsTo('App\Registration');
    }

    public function station_data(){
        return $this->hasMany('App\StationData', 'station_id');
    }

    /**
        METHODS
     */
}
