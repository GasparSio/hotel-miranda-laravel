<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required|email',
            'subject_of_review' => 'required',
            'review_body' => 'required',
        ]);

        Contact::create($request->all());

        $formSent = 'Your form has been sent';
        $error = false;
        $notification = ['message' => $formSent];
        return view('contact', ['notification' => $notification, 'error' => $error]);
    }
}
