<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    public function index($fname, $lname){
        //echo "Welcome $fname $lname to world of Laravel Controllers";
        return view("about");
    }
}
