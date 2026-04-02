<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Mail;
use App\Mail\InternshipStatusMail;

class Internship extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
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
        'apply_for',
        'start_date',

        // Uploaded Files (Path storage)
        'photo',
        'cv',
        'letter',

        // System Status
        'status', // Pending, Accepted, Rejected
    ];

    /**
     * The "booted" method of the model.
     * This triggers automatically whenever a model event (like updating) occurs.
     */
    protected static function booted()
    {
        static::updated(function ($internship) {
            /**
             * Check if the 'status' column was specifically changed.
             * This prevents sending emails if you only update their name or phone.
             */
            if ($internship->isDirty('status')) {
                // Send the professional status update email to the applicant
                Mail::to($internship->email)->send(new InternshipStatusMail($internship));
            }
        });
    }
}
