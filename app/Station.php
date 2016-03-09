<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    protected $table = 'stations';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_id', 'name', 'measurement', 'type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
        RELATIONSHIPS
     */

    public function event(){
        return $this->belongsTo('App\Event');
    }

    public function station_data(){
        return $this->hasMany('App\StationData', 'station_id');
    }

    /**
        METHODS
     */
}
