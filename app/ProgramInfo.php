<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramInfo extends Model
{
    //

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function donation(){
        return $this->hasOne('App\Donation');
    }
}
