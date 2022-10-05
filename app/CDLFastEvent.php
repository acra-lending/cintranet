<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CDLFastEvent extends Model
{    
    protected $table = 'cdl_fast_events';
    protected $fillable = ['title', 'start', 'end', 'color'];
}
