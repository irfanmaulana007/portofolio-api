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
        // dd($request->email);
        Contact::Create([
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message
        ]);

        try {
            Mail::to(env('MAIL_TO_ADDRESS'))->send(new sendContact($request->email, $request->subject, $request->message));
			
            return response()->json([
                'message' => 'success'
            ]);
    	} catch (\Exception $e) {
    		return $e->getMessage();
    	}

    }
}
