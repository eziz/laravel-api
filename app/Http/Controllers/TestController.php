<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sample()
    {
        //echo "<h1> welcome to Test Controller</h1>";
        return view("sample-view", [
            "course" => "Online Web Tutor",
            "email"=>"sample@gmail.com",
            "name" => "Eziz",
            "surname"=>"Soyunov"
        ]);
    }
}
