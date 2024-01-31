<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience = Experience::orderBy('created_at', 'DESC')->get();
            return view('backoffice.experience.eproduits', compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.experience.ecreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        Experience::create($request->all());

        return redirect()->route('eproduits')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $experience = Experience::FindOrFail($id);
        return view('backoffice.experience.eshow', compact('experience')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $experience = Experience::FindOrFail($id);
        return view('backoffice.experience.eedit', compact('experience')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $experience = Experience::FindOrFail($id);
    
        $experience-> update($request->all());

        return redirect()->route('eproduits')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $experience = Experience::FindOrFail($id);
            
        $experience-> delete();

        return redirect()->route('eproduits')->with('success', 'Product deleted successfully');
    }
}
