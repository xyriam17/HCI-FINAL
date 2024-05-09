<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController
{
    public function submitContact(Request $request) {
        $name = $request->input('fullname');
        $email = $request->input('email');
        $message = $request->input('message');

          // Validate the form data
          $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|string|email|unique:contact',
            'message' => 'required|string|min:0',
        ]);

      
        $contact = new Contact() ;
        $contact->name = $name ;
        $contact->email = $email ;
        $contact->message = $message ;

        $contact->save() ;

        return redirect()->back()->with('success' ,'Submitted successfully');
    }
}
