<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title', 'slug', 'icon', 'short_description',
        'description', 'image', 'is_active', 'sort_order'
    ];
}
