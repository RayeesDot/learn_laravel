<?php
namespace App\Models;
use Illuminate\Console\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authnticatable;

#[Fillable(['name','email','password'])]
#[Hidden(['password','remember_token'])]
class User extends Authnticatable
{
  use HasApiTokens;
}