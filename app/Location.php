<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Location extends Model
{
    public function branch(){
        return $this->belongsTo('App\Branch');
    }
}
