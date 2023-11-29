<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusReport extends Model
{
    protected $table = 'employee_status_reports';
    
    public $fillable = ['id', 'body', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
