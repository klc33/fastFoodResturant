<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Food;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    function index(){
        $data = Food::all();
        if(Auth::id()){
            $user_id = Auth::id();
            $count = Cart::where("user_id",$user_id)->count();
            return view("home",compact("data","count"));
        }
        else{
            $count = 0;
            return view("home",compact("data","count"));
        }
        
        
    }

    function redirects(){
        $usertype = Auth::user()->usertype;
        
        if($usertype=="1"){
            return view("admin.adminhome");
        }

       else{
        $user_id = Auth::id();

        $count = Cart::where("user_id",$user_id)->count();

        $data = Food::all();
        return view("home",compact("data","count"));
       }
    }
    
    public function addcart(Request $request ,$id){
        if(Auth::id()){
            $user_id = Auth::id();
            $food_id = $id;
            $quantity = $request->quantity;

            $cart = new Cart;
            $cart->user_id=$user_id;
            $cart->food_id=$food_id;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back();

        }
        else{
            return redirect('/login');
        }
    }
    public function showcart(Request $request,$id){
        if(Auth::id()){
            $count = Cart::where('user_id',$id)->count();
            $i = 0;

            $data2 =cart::select('*')->where("user_id","=",$id)->get();

            $data = DB::table('carts')
            ->join('food', 'carts.food_id', '=', 'food.id')
            ->join('users','carts.user_id','=','users.id')
            ->select('food.title', 'carts.quantity', 'food.price')->where('user_id','=',$id)
            ->get();
            
        return view("showcart",compact("count","data","data2","i"));
        }
    } 
}
