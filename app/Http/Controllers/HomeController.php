<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;

class HomeController extends Controller
{
    function index(){
        $data = Food::all();
        return view("home",compact("data"));
    }

    function redirects(){
        $usertype = Auth::user()->usertype;
        
        if($usertype=="1"){
            return view("admin.adminhome");
        }

       else{
        $data = Food::all();
        return view("home",compact("data"));
       }
    }
    
}
