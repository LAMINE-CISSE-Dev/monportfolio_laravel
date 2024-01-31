<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorAppController extends Controller
{
    public function doctorApp(){
        return view('frontoffice.doctorApp');
    }
}
