<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Announcement extends Model
{
    use SoftDeletes;
    
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
