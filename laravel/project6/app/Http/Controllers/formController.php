<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getProcess(Request $request){
        return $request->input();
    }

    public function postProcess(Request $request){
        return $request->input();
        //echo "Welcome ".$request->input("fname")." ".$request->input("lname");
    }
}
