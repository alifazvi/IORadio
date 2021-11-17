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

    public function donations()
    {
        return $this->hasMany('App\Donation','program_id');
    }

    public function programData(){
        return $this->hasMany('App\ProgramData','program_id');
    }

    public function latestProgramData(){
        return $this->hasOne('App\ProgramData','program_id')->orderBy('created_at', 'desc');
    }
}
