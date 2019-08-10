<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Mail\Contact as sendContact;
use Illuminate\Support\Facades\Mail;

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

        Mail::to(env('MAIL_TO_ADDRESS'))
                ->send(new sendContact($request->email, $request->subject, $request->message));

        return response()->json([
            'message' => 'success'
        ]);
    }
}
