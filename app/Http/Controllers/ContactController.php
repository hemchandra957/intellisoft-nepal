<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Store the inquiry in the database
        Inquiry::create($validatedData);

        try {
            // 3. Send Email Notification to Admin
            $adminEmail = "hemc6375@gmail.com";

            Mail::raw("You have received a new inquiry from your website:\n\n" .
                      "Name: " . $validatedData['name'] . "\n" .
                      "Email: " . $validatedData['email'] . "\n" .
                      "Message: \n" . $validatedData['message'],
            function ($message) use ($validatedData, $adminEmail) {
                $message->to($adminEmail)
                        ->subject('New Website Inquiry: ' . $validatedData['name']);
            });

        } catch (\Exception $e) {
            // Log the error if the mail fails to send
            Log::error("Mail Sending Failed: " . $e->getMessage());
        }

        // 4. Redirect back with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}
