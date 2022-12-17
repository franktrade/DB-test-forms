<?php

namespace App\Http\Controllers;
use App\Models\pizza;

use Illuminate\Http\Request;

class pizzacontroller extends Controller
{
    public function create(){
   
      
        return view('create'); 
    }
     public function store(Request $request)
        {
            // Validate the form data
            $request->validate([
                'name' => 'required',
                'type' => 'required',
                'base' => 'required',
            ]);
        
            // Create a new pizza
            $pizza = Pizza::create([
                'name' => $request->name,
                'type' => $request->type,
                'base' => $request->base,
            ]);
        
            // Redirect to a success page
            return redirect()->route('store');
        }
         
}
