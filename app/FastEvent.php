<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FastEvent extends Model
{    
    protected $fillable = ['title', 'start', 'end', 'color'];
}
