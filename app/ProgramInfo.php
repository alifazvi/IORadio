<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramInfo extends Model
{
    //
    protected $fillable = ['program_name', 'program_detail', 'program_file','user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function donation()
    {
        return $this->hasOne('App\Donation');
    }
}
