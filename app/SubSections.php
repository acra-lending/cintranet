<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubSections extends Model
{
    public $fillable = ['title', 'body', 'comments'];

    public function section() 
    {
        return $this->belongsTo('App\Sections');
    }
}
