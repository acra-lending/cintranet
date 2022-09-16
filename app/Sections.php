<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    public $fillable = ['title', 'body', 'comments'];

    public function subSection() 
    {
        return $this->hasMany('App\SubSections', 'section_id', 'id');
    }

    public function turntime()
    {
        return $this->belongsTo('App\TurnTimes');
    }
}
