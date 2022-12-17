<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;


use Illuminate\Support\Facades\Redirect;

class membercontroller extends Controller
{
    //
    function addData(Request $req)
    {
    
   $member = new member;
    
   $member->name=$req->name;
   $member->email=$req->email;
   $member->address=$req->address;
   $member->save(); 
   return Redirect('add')->with("mssg","Thanks for your order");

    }
    
}
