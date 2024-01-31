<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        /**
         * Display a listing of the resource.
         */
        public function index()
        {
            // return ProductResource::collection(Product::all());
            $product = Product::orderBy('created_at', 'DESC')->get();
            return view('backoffice.products.produits', compact('product'));
    
        }
    
        /**
         * Show the form for creating a new resource.
         */
        public function create()
        {
            return view('backoffice.products.create');
        }
    
        /**
         * Store a newly created resource in storage.
         */
        public function store(ProductRequest $request)
        {
            $formFields = $request->validated();
            if ($request->hasFile(key: 'image')) {
                $formFields['image'] = $request->file(key: 'image')->store(path: 'product', options:'public');
            }
            Product::create($formFields);
            return redirect()->route('produits')->with('success', 'Product added successfully');
            
        }
    
        /**
         * Display the specified resource.
         */
        public function show(string $id)
        {
            $product = Product::FindOrFail($id);
            return view('backoffice.products.show', compact('product')); 
        }
    
        /**
         * Show the form for editing the specified resource.
         */
        public function edit(string $id)
        {
            $product = Product::FindOrFail($id);
            return view('backoffice.products.edit', compact('product')); 
        }
    
        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, string $id)
        {
            $product = Product::FindOrFail($id);
    
            $product-> update($request->all());
    
            return redirect()->route('produits')->with('success', 'Product updated successfully');
        }
    
        /**
         * Remove the specified resource from storage.
         */
        public function destroy(string $id)
        {
            $product = Product::FindOrFail($id);
            
            $product-> delete();
    
            return redirect()->route('produits')->with('success', 'Product deleted successfully');
        }
    }
    