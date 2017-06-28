<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany('App\Appointment', 'places_id');
    }
}
