<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //


    protected $table = "gb_comments";
    public $timestamps = false;

    public function drivers()
    {
        return $this->belongsTo('App\Driver');
    }

    public function passengers()
    {
        return $this->belongsTo('App\passenger');

    }
}
