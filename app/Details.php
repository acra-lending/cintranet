<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Details extends Model
{
    use SoftDeletes;
    
    protected $table ='s2zar_jsn_users';

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}
