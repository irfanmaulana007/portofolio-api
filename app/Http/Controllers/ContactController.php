<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function get () {
        $contact = Contact::get();

        return response()->json($contact);
    }

    public function send (Request $request) {
        $contact = new Contact();
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $contact->save();

        return response()->json([
            'message' => 'success'
        ]);
    }
}
