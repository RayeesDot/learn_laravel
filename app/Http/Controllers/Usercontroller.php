<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class Usercontroller extends Controller
{
    public function index(UserService $Service)
    {
        $users = $Service->getAllUsersService();
        return response()->json($users);
    } 
    public function store(Request $request, UserService $Service)
    {
       $validated = $request->validate([
        'name'=>'required|string|max:255',
        'password'=>['string','confirmed',Password::min(8)->mixedCase()->numbers()->uncompromised()], //also pass (in json) "password_confirmation": ""
        'email'=>'required|string|max:255|email|unique:users,email',
       ]);

      $user = $Service->createAllUsersService($validated);

      return response()->json([
        'message'=>'user created successfully',
        'data'=> $user
      ],201);
       
    }


}
