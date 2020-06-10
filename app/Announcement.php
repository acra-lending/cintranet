<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = 'announcements';
    
    public $fillable = ['title', 'body', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }

    public function announcementFiles()
    {
        return $this->hasMany('App\AnnouncementFile');
    }
}
