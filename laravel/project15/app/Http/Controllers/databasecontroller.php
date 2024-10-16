<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databasecontroller extends Controller
{
    //
    public function addData(){
        $data = DB::table("students")->insert([
            "fname"=> "Devangi",
            "lname" => "dave",
            "city" => "Rajkot",
            "email" => "devangi@gmail.com",
            "phone" => "9900990099"
        ]);

        return $data;
    }

    public function viewData(){
        //return DB::table("students")->get();
        // return DB::table("students")->get(["id", "fname", "lname"]);
        // select id, fname, lname from students where id = 5
        return DB::table("students")->where("id", "=", "5")->get(["id", "fname", "lname"]);
    }

    public function deleteData(){
        return DB::table("students")->where("id", "=", "5")->delete();
    }

    public function updateData(){
        return DB::table("students")->where("id", "=", "1")->update([
            "fname" => "Hemal",
            "lname" => "Varu",
            "city" => "Amreli",
            "email" => "Hemal@gmail.com",
            "phone" => "9876556789"
        ]);
    }

    public function otherData(){
        // return DB::table("students")->count();
        //return DB::table("students")->sum("id");
        //return DB::table("students")->min("id");
        //return DB::table("students")->max("id");
        return DB::table("students")->avg("id");
    }

    public function joinDemo(){
        //return DB::table("students")->get();
        
        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->get();
        
        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->select(["students.id", "students.fname", "students.lname", "students.city", "attendance.absents", "attendance.presents"])->get();

        //return DB::table("students")->join("attendance", "students.id", "=", "attendance.student_id")->select(["students.id", "students.fname", "students.lname", "students.city", "attendance.absents", "attendance.presents"])->where("id", "=", "4")->get();

        return DB::table("students")
        ->join("attendance", "students.id", "=", "attendance.student_id")
        ->select(["students.id", "students.fname", "students.lname", "students.city", "attendance.absents", "attendance.presents"])
        ->where("id", "=", "4")
        ->get();
    }
}
