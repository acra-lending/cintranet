<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class WholesaleFastEvent extends Model
{    
    protected $table = 'wholesale_fast_events';
    protected $fillable = ['title', 'start', 'end', 'color'];
}
