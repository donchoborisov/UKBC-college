<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'author_id', 'title', 'body','image','slug','meta_description','meta_keywords','status'
    ];
}
