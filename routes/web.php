<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,"index"]); //go to home page
Route::get('/redirects',[HomeController::class,"redirects"]);//redirect depending on usertype
Route::post('/addcart/{id}',[HomeController::class,"addcart"]);//add items to cart for user
Route::get('/remove/{id}',[HomeController::class,"remove"]); // remove item from cart for user
Route::get('/showcart/{id}',[HomeController::class,"showcart"]);// show user cart items
Route::post('/orderconfirm/{id}',[HomeController::class,"orderconfirm"]);

Route::get('/foodmenu',[AdminController::class,"foodmenu"]);//show adming all foodmenu
Route::post('/uploadfood',[AdminController::class,"upload"]);//take us to upload page
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);//delete food menu
Route::get('/updateview/{id}',[AdminController::class,"updateview"]);//take us to update view page depending on user id
Route::post('/update/{id}',[AdminController::class,"update"]);//update food menu

Route::get("/orders",[AdminController::class,"getallorders"]);



Route::get('/users',[AdminController::class,"user"]);//show all users in admin page
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);//delete a user in adminpage


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/redirects');
    })->name('dashboard');
});
