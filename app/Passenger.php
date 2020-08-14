<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    //
    protected $table = "gb_passengers";
    public $timestamps = true;
    const CREATED_AT = "registrationDate";
    const UPDATED_AT = "updateTime";


    public function comments()
    {
     return $this->hasMany("App\Comment",'passenger_id','id');
    }
}
