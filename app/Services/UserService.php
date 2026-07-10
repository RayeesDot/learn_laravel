<?php

namespace App\Services; // This tells Laravel that this current file physically lives in your app/Services/ folder.

use App\Models\User; // It tells this service file: "Whenever I type Product inside this class, automatically look inside the app/Models/ folder."

use Illuminate\Support\Facades\Hash;
class UserService
{
    public function getAllUsersService()
    {
        return User::all();
    }
    public function createAllUsersService(array $data) : User
    {
        $data['password'] = Hash::make($data['password']); // hash before saving
        return User::create($data);
    }

    public function findUserService(string $id) : ?User
    {
       return User::find($id);
    }
    public function updateUserService(User $user, array $data) : User
    {
        $user->update($data);
       return $user;
    }
    
    public function deleteUserService(User $user) : void
    {
         $user->delete();
    }
   
}