<?php

namespace App\Http\Controllers;

use App\Models\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = Skills::orderBy('created_at', 'DESC')->get();
            return view('backoffice.skills.sproduits', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.skills.screate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        Skills::create($request->all());

        return redirect()->route('sproduits')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $skills = Skills::FindOrFail($id);
        return view('backoffice.skills.sshow', compact('skills')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $skills = Skills::FindOrFail($id);
        return view('backoffice.skills.sedit', compact('skills')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $skills = Skills::FindOrFail($id);
    
        $skills-> update($request->all());

        return redirect()->route('sproduits')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $skills = Skills::FindOrFail($id);
            
        $skills-> delete();

        return redirect()->route('sproduits')->with('success', 'Product deleted successfully');
    }
}
