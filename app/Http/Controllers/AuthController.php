<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AuthService;

class AuthController extends Controller
{
    public function login(Request $request, AuthService $login)
    {
        $validate = $request->validate([
        'email' => 'required|email',
        'password' => 'required'
        ]);
        $loggedUser = $login->loginSevice($validate);
        if(!$loggedUser)
            {
                 return response()->json([
            'message' => 'Invalid credentials'
        ],401);
            }
        $token = $loggedUser->createToken('mobile-token')->plainTextToken;

        if ($loggedUser) {
            return response()->json([
                'message' => 'Login successful',
                'user' => $loggedUser,
                'token'=> $token
            ]);
        }
       
    }
}
