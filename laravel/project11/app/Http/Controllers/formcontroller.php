<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formcontroller extends Controller
{
    //
    public function loginProcess(Request $request){
        if($request->input("email") == "admin@gmail.com" && $request->input("password") == "admin"){
            session()->put("email", $request->input("email"));
            return redirect("/home");
        }else{
            session()->flash("error", "Invalid Username or Password");
            return redirect("/");
        }
    }

    public function uploadProcess(Request $request){
        // $filename = $request->file("file1")->store();
        // $filename = $request->file("file1")->storeAs("myuploads");
        $filename = $request->file("file1")->storeAs("myuploads", $request->file("file1")->getClientOriginalName());
        // $filename = $request->file("file1")->storeAs("/myuploads", "demo.jpg");
        session()->flash("success", "$filename File Uploaded on Server");
        return redirect("/fileupload");
    }
}
