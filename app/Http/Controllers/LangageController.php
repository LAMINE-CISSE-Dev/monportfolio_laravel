<?php

namespace App\Http\Controllers;

use App\Models\Langage;
use Illuminate\Http\Request;

class LangageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $langage = Langage::orderBy('created_at', 'DESC')->get();
            return view('backoffice.langage.lproduits', compact('langage'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backoffice.langage.lcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    { 
        Langage::create($request->all());

        return redirect()->route('lproduits')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $langage = Langage::FindOrFail($id);
        return view('backoffice.langage.lshow', compact('experience')); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $langage = Langage::FindOrFail($id);
        return view('backoffice.langage.ledit', compact('langage')); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $langage = Langage::FindOrFail($id);
    
        $langage-> update($request->all());

        return redirect()->route('lproduits')->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $langage = Langage::FindOrFail($id);
            
        $langage-> delete();

        return redirect()->route('lproduits')->with('success', 'Product deleted successfully');
    }
}
