<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function loginSevice(array $data) : ?User
    {
        $user = User::where('email',$data['email'])->first();
        if(!$user || !Hash::check($data['password'], $user->password)){
          return null;
        }
        return $user;
    }
}