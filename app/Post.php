<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Post extends Model
{
    use Sortable;

    public $sortable = [ 'filename', 'filesize', 'created_at', 'updated_at' ];
    protected $fillable = ['category_id', 'filesize'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
