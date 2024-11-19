<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function uploadFile(Request $request){
        //echo "Called";
        //return $request->file("file1")->store();
        //return $request->file("file1")->storeAs("files/");

        $file1 = $request->file("file1");
        return $file1->storeAs("/files", $file1->getClientOriginalName());
    }
}
