<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    protected $table='time_slots';


    public function programInfo(){
        return $this->hasMany('App\ProgramInfo','time_slot_id');
    }
}
