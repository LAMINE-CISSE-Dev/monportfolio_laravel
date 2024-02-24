<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // Corrected import statement
use App\Mail\MailDemo;

class ContactFormController extends Controller
{
    function post_message(Request $request){
     
     $request->validate([ 
        'email'=>"required|email",
     ]);

     $data = [
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
     ];

     Mail::to('lc327300@gmail.com')->send(new MailDemo($data));
     
     return back()->with('msg', 'Merci d\'avoir contacté. Votre message a été envoyé avec succès.');
    }
}
