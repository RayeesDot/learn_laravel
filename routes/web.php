<?php

use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutpath', function(){
return view('about', ["name" => "Rayees Ahmad", "email" => "rayees@example.com"]);
});

// using controller
Route::get('/section2path', [SectionController::class, 'section2']);

