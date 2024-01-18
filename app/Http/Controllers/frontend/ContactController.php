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
        'content' => 'required|string',
    ]);

    $name = $request->input('name');
    $email = $request->input('email');
    $content = $request->input('content');

    // Save contact to the database
    Contact::create([
        'name' => $name,
        'email' => $email,
        'content' => $content,
    ]);

    Mail::to($email)->send(new ContactMail($name, $email, $content));
    return redirect()->route('frontend.Contact.contact_index')->with('success', 'Message sent successfully and saved to the database!');

}

}
