<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class databasecontroller extends Controller
{
    //
    public function getAllData(){
        //echo "Called";
        //return DB::select("select * from students");
        //return student::all();
        // select id, fname from stuents
        //return student::all(["id", "fname"]);
        return student::all(["id", "fname"])->where("id", "=", 1);

    }
}
