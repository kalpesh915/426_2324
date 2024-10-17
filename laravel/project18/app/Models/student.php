<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    //
    public $timestamps = false;
    /// accessors
    public function getFnameAttribute($value){
        return strtoupper($value);
    }

    public function getLnameAttribute($value){
        return strtoupper($value);
    }

    public function getCityAttribute($value){
        return strtoupper($value);
    }

    // mutators
    public function setFnameAttribute($value){
        return $this->attributes["fname"] = strtoupper($value);
    }

    public function setLnameAttribute($value){
        return $this->attributes["lname"] = ucfirst($value);
    }

    public function setCityAttribute($value){
        return $this->attributes["city"] = strtolower($value);
    }

    public function getAttendance(){
        return $this->hasOne(attendance::class);
    }

    public function getExamsData(){
        return $this->hasMany(exam::class);
    }
}
