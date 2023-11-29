<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TurnTimes extends Model
{
    public function section()
    {
        return $this->hasMany('App\Sections', 'turn_time_id');
    }

    public function subSection()
    {
        return $this->hasManyThrough(
            'App\SubSections',
            'App\Sections',
            'turn_time_id',
            'section_id',
            'id',
            'id'
        );
    }
    
    
    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
