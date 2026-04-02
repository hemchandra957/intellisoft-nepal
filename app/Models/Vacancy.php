<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = [
        'title',
        'location',
        'job_type',
        'deadline',
        'description',
        'is_active',
    ];
}
