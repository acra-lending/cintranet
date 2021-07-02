<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    protected $table = 'submissions';

    public $fillable = ['ae_name', 'submission_goal', 'funding_goal', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
