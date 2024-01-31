<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $education = Education::orderBy('created_at', 'DESC')->get();
            return view('backoffice.education.edproduits', compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.education.edcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        Education::create($request->all());

        return redirect()->route('edproduits')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $education = Education::FindOrFail($id);
        return view('backoffice.education.edshow', compact('education')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $education = Education::FindOrFail($id);
        return view('backoffice.education.ededit', compact('education')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $education = Education::FindOrFail($id);
    
        $education-> update($request->all());

        return redirect()->route('edproduits')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $education = Education::FindOrFail($id);
            
        $education-> delete();

        return redirect()->route('edproduits')->with('success', 'Product deleted successfully');
    }
}
