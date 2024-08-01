<?php

namespace App\Http\Controllers\frontend;
use App\Mail\ContactMail;
// use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Add this line to import the Mail facade
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.Contact.contact_index');
    }

    public function postContact(Request $request)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required',
        'message' => 'required|string',
    ]);


    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $message = $request->input('message');


    // Save contact to the database
    Contact::create([
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
    ]);

    Mail::to($email)->send(new ContactMail($name, $email,$phone, $message));
    return redirect()->route('frontend.Contact.contact_index')->with('success', 'Message sent successfully and saved to the database!');

}

}
