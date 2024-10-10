<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class databasecontroller extends Controller
{
    //
    public function getAllData(Request $request){
        // select * from students
        //$studentsData = student::all(["id", "fname", "lname"]);
        // $studentsData = student::all()->where("id", ">=", "50");
        // select * from students where id = 5
        //$studentsData = student::all()->find(5);
        $studentsData = student::all();
        //return $studentsData;
        return view("getalldata", ["studentsData" => $studentsData]);
    }

    public function getPagination(Request $request){
        $studentsData = student::paginate(10);
        return view("pagination", ["studentsData" => $studentsData]);
    }
}
