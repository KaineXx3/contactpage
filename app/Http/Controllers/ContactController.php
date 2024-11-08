<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function submitForm(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Here you would typically process the form, such as sending an email or saving it to the database.
        // For now, we will just return a success message.
        
        return back()->with('success', 'Your message has been sent!');
    }
}
