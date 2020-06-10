<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnnouncementFile extends Model
{
    public $table = 'announcements_files';

    public $fillable = ['announcement_id'];

    public function announcement()
    {
        return $this->belongsTo('App\Announcement');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
