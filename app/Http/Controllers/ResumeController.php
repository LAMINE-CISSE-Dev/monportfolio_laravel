<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use App\Models\Langage;
use App\Models\Skills;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function resume(){
        $experience = Experience::orderBy('created_at', 'DESC')->get();
        $education = Education::orderBy('created_at', 'DESC')->get();
        $skills = Skills::orderBy('created_at', 'DESC')->get();
        $langage = Langage::orderBy('created_at', 'DESC')->get();

        return view('frontoffice.parcours', compact('experience', 'education', 'skills', 'langage'));
       }
}
