<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Internship extends Model
{
    use HasFactory;

    protected $fillable = [
        // Personal Info
        'full_name',
        'email',
        'phone',
        'gender',

        // Address Info
        'province',
        'district',
        'palika',

        // Academic Info
        'college',
        'faculty',
        'semester',

        // Application Details
        'apply_for', // कुन कोर्सको लागि (Laravel, React, etc.)
        'start_date',

        // Uploaded Files (Path store गर्न)
        'photo',
        'cv',
        'letter',

        // System Status
        'status', // Pending, Accepted, etc.
    ];
}
