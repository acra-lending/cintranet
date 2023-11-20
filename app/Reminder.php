<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reminder extends Model
{
    protected $table = 'reminders';
    
    public $fillable = ['id', 'body', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
