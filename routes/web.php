<?php

use App\Http\Controllers\AuthWebController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserWebcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formdata', function () {
    return view('formdata');
});

Route::get('/aboutpath', function(){
return view('about', ["name" => "Rayees Ahmad", "email" => "rayees@example.com"]);
});

// using controller
Route::get('/section2path', [SectionController::class, 'section2']);

Route::get('/htmlcodereuse', function(){
    return view('htmlcodereuse');
});

Route::resource('products', ProductController::class);

Route::get('Registerfrom',[UserWebcontroller::class, 'showRegister']);
Route::post('Registerusers',[UserWebcontroller::class, 'store']);

Route::get('/login',[AuthWebController::class, 'Showlogin'])->name('login'); // loginform
Route::post('/login',[AuthWebController::class, 'login']);

Route::middleware('auth')->group(function()
{
    Route::resource('usersDashbord', UserWebcontroller::class);
});



