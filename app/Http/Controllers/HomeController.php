<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        return view("home");
    }

    function redirects(){
        $usertype = Auth::user()->usertype;
        
        if($usertype=="1"){
            return view("adminhome");
        }

       else{
            return view("home");
       }
    }
    
}
