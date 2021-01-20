<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AnnouncementFile extends Model
{
    use SoftDeletes;
    
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
