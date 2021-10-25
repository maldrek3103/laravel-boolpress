<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = ['title', 'content', 'slug', 'image', 'category_id'];

    // public function getFormattedDate($column)
    // {
    //     return Carbon::createFromFormat('d-m-Y H:i:s', $column);
    // }

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}
