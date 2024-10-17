<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentController extends Model
{
    //
    public function getAllData(){
        return student::all();
    }

    public function addNewData() {
        $student = new student();

        $student->fname = "DeVaNgI";
        $student->lname = "DAVE";
        $student->city = "SuraT";
        $student->save();

        return "New Student Created";
    }

    public function One2One(){
        return student::find(1)->getAttendance;
    }

    public function One2Many(){
        return student::find(1)->getExamsData;
    }
}
