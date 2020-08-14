<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    //

    protected $table = "gb_drivers";
    public $timestamps = true;
    const CREATED_AT = "creationTime";
    const UPDATED_AT = "updateTime";


    public function comments()
    {
        return $this->hasMany('App\Comment','driver_id','id');

    }
}
