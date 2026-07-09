<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Fillable;
// mass assignment: tells laravel which fields are safe to fill
// directly from an array (like Product::create($validated)).
// Without this, Laravel throws MassAssignmentException to protect
// against users injecting fields you didn't intend (e.g. is_admin).
#[Fillable(['name','discription','price','stock'])]
class Product extends Model
{
    //
}
