<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramData extends Model
{
    //

    protected $fillable=['user_id','program_file','program_id','delivery_date'];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
