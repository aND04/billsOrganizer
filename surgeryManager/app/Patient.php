<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = [];

    public function appointments()
    {
        return $this->hasMany('App\Appointment', 'patient_id');
    }

    public function surgeries()
    {
        return $this->hasMany('App\Surgery', 'patient_id');
    }
}
