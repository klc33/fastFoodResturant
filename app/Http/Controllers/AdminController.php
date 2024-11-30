<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function user(){
        $data = user::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id){
        $data =user::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function foodmenu(){
        $data = Food::all();
        return view("admin.foodmenu",compact("data"));
    }
    public function upload(Request $request){
        $data = new Food;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();

    }

    public function deletemenu($id){
        $data =Food::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateview($id){
        $data =Food::find($id);
        return view("admin.updateview",compact("data"));
    }
    public function update(Request $request,$id){
        $data =Food::find($id);
        
        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;
        $data->title = $request->title;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->save();

        return redirect()->back();
    }
    public function getallorders(){
        if(Auth::id()){
            if(Auth::user()->usertype == "1"){
                
                $data = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('carts','carts.user_id','=','users.id')
            ->join('food','carts.food_id','=','food.id')
            ->select('food.title', 'carts.quantity', 'food.price','orders.name','orders.address','orders.phone')->get();
            
                return view('admin.orders',compact('data'));
            }
        
        }
    }
}
