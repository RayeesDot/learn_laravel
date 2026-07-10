<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserWebcontroller extends Controller
{
  public function index(UserService $Service)
  {
    $users = $Service->getAllUsersService();
    return view('users.index', compact('users'));
    // compact('users') : Converts the $users array/variable into key-value data to be passed to the view. It is equivalent to writing ['users' => $users].
    // . (dot) in 'users.index' is a directory separator for template files. Instead of using standard slashes (/), Laravel uses dot notation to point to nested view files within your resources/views directory.
  }

  public function showRegister()
  {
    return view('auth.registerblade'); // resource/view/auth/registerblade
  }
  public function store(Request $request, UserService $service)
  {
    $validated = $request->validate([
      'name' => 'required|string|max:255',
      'password' => ['required', 'string', 'confirmed', Password::min(8)->mixedCase()->numbers()->uncompromised()],
      'email' => 'required|string|max:255|email|unique:users,email',
    ]);
    $service->createAllUsersService($validated);
    return redirect()->route('users.index')->with('success','user created successfully');

  }
}
