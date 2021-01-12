<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsefulLinks extends Model
{
    protected $table = 'useful_links';
    
    public $fillable = ['title', 'url', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
