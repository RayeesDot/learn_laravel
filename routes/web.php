<?php

use App\Http\Controllers\SectionController;
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

