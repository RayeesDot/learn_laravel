<?php

namespace App\Http\Controllers;

use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthWebController extends Controller
{
    public function Showlogin()
    {
        return view('auth.loginform');   // resource/views/auth
    }
    public function login(Request $request, AuthService $service)
    {
        $validate = $request->validate([
         'email'=>'required|email',
         'password'=>'required'
        ]);
       $user = $service->loginSevice($validate);
       if(!$user)
        {
            return back()->withErrors(['email'=> 'Invalid credentials'])->withInput();  
        }
         Auth::login($user);

        $request->session()->regenerate();
        return redirect()->route('usersDashbord.index')->with('success', 'welcome, '.$user->name);

    }
}
