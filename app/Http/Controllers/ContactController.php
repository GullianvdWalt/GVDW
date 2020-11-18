<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validation
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required'
        ]);

        // Create New User_Contact
        $contact = new Contact;
        // Get User Input
        $contact->name = $request->input('name');
        $contact->mobile = $request->input('mobile');
        $contact->email = $request->input('email');
        $contact->message = $request->input('message');

        $contact->save();

        // Redirect after contact
        return redirect('/contact')->with('success', 'Message Sent');
    }
}
