<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Handle email sending logic (customize as needed)
        Mail::raw($request->message, function ($message) use ($request) {
            $message->to('meshramkp@rknec.edu')
                    ->subject('New Contact Message from ' . $request->name)
                    ->from($request->email);
        });

        // Redirect back with success message
        return redirect()->route('contact')->with('success', 'Message sent successfully!');
    }
}
