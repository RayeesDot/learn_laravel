<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function section2()
    {
        return view("section2",[
            "profession" => "Developer"]);
    }
}
