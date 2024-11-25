<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


Route::get('/',[HomeController::class,"index"]);
Route::get('/redirects',[HomeController::class,"redirects"]);

Route::post('/addcart/{id}',[HomeController::class,"addcart"]);

Route::get('/foodmenu',[AdminController::class,"foodmenu"]);
Route::post('/uploadfood',[AdminController::class,"upload"]);
Route::get('/deletemenu/{id}',[AdminController::class,"deletemenu"]);
Route::get('/updateview/{id}',[AdminController::class,"updateview"]);
Route::post('/update/{id}',[AdminController::class,"update"]);



Route::get('/users',[AdminController::class,"user"]);
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return redirect('/redirects');
    })->name('dashboard');
});
