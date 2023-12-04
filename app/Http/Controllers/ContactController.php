<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function postcontact(Request $request)
    {
        if ($request->isMethod('post')) {
            Contact::create($request->all());

            $formSent = 'Form Sent';
            $notification = ['message' => $formSent];
            return view('contact', compact('notification'));
        } else {
            echo 'no entro';
            return view('contact');
        }
    }
}
