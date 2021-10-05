<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //

    public function programinfo(){
        return $this->belongsTo('App\ProgramInfo');
    }
}
