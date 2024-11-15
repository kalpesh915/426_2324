<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    //
    public function getStudents($id = null){
        if($id == null){
            return response([
                "message" => "Data of All Students",
                "data" => student::all()
            ],200);
        }else{
            $studentData = student::find($id);

            if($studentData == null){
                return response([
                    "message"=>"No Data Found"
                ], 404);
            }else{
                return response([
                    "message" => "Student Data Found",
                    "data" => $studentData
                ], 200);
            }
        }
    }

    public function addNewStudent(Request $request){
        $validationRules = array(
            "fname" => "required",
            "lname" => "required",
            "email" => "required|email|unique:students,email",
            "age" => "required|numeric|min:18|max:60",
        );

        $validator = Validator::make($request->all(), $validationRules);

        if($validator->fails()){
            return response([
                "message" => "Validation Fail",
                "errors" => $validator->errors()
            ], 499);
        }else{
            $student = new student();
            $student->fname = $request->fname;
            $student->lname = $request->lname;
            $student->email = $request->email;
            $student->age = $request->age;
            $student->save();

            return response([
                "message" => "New Student Created"
            ], 200);
        }
    }
}
