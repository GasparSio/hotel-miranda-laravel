<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function postcontact(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'contactName' => 'required',
                'contactPhone' => 'required',
                'contactEmail' => 'required|email',
                'contactSubject' => 'required',
                'contactMessage' => 'required',
            ]);

            $full_name = $request->input('contactName');
            $phone = $request->input('contactPhone');
            $email = $request->input('contactEmail');
            $subject = $request->input('contactSubject');
            $contactmessage = $request->input('contactMessage');

            Contact::create([
                'full_name' => $full_name,
                'phone_number' => $phone,
                'email' => $email,
                'subject_of_review' => $subject,
                'review_body' => $contactmessage,
            ]);

            $formSent = 'Form Sent';
            $error = false;
            $notification = ['message' => $formSent];
            return view('contact', ['notification' => $notification, 'error' => $error]);
        } else {
            return view('contact');
        }
    }
}
