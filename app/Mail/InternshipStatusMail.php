<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use App\Models\Internship;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InternshipStatusMail extends Mailable
{
    use Queueable, SerializesModels;

        public $internship;

        /**
        * Create a new message instance.
        */
        public function __construct(Internship $internship)
        {
            $this->internship = $internship;
        }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Update on your Internship Application - Intellisoft Nepal',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.internship-status',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
