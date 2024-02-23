<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactMailController extends Controller
{
    public function test_view(){
        return view('frontoffice.contact_mail');
    }
}
