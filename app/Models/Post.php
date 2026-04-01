<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'content',
        'is_published',
        'published_at',
    ];

        protected $casts = [
        'published_at' => 'datetime',
    ];
}
