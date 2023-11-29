<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class UsefulLinks extends Model
{
    use Sortable;

    protected $table = 'useful_links';
    
    public $sortable = ['title', 'url', 'user_id'];

    public $fillable = ['title', 'url', 'user_id'];

    public function user() 
    {
        return $this->belongsTo('App\User');
    }
}
