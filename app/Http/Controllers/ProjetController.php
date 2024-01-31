<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
   public function projet(){

    $product = Product::orderBy('created_at', 'DESC')->get();
    return view('frontoffice.projets', compact('product'));
    
   }
}
