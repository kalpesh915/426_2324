<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    //
    public function getProcess(Request $request){
        return $request->input();
    }

    public function postProcess(Request $request){
        return $request->input();
    }

    public function putProcess(Request $request){
        return $request->input();
    }

    public function deleteProcess(Request $request){
        return $request->input();
    }

    public function flashDemo(Request $request){
        session()->flash("greet", "Welcome to world of Sessions in Laravel");
        return redirect("/flashpage");
    }
}
