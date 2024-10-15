<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class studentController extends Controller
{
    //
    public function addNewStudentProcess(Request $request)
    {
        //return $request;

        // code for insert new data in table
        /*$student = new student();

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->email = $request->input("email");
        $student->phone = $request->input("phone");
        $newData = $student->save(); // permanent save

        if($newData){
            return redirect("/")->with("success", "New Student Created in Database");
        }else{
            return redirect("/")->with("error", "Error while Creating New Student in Database");
        }*/

        /// validaiton rules

        /* $validationRules = [
            "fname" => "required",
            "lname" => "required",
            "city" => "required",
            "email" => "required|email|unique:students,email",
            "phone" => "required"
        ];

        $validationResult = Validator::make($request->all(), $validationRules);

        if (!$validationResult->fails()) {
            $student = new student();

            $student->fname = $request->input("fname");
            $student->lname = $request->input("lname");
            $student->city = $request->input("city");
            $student->email = $request->input("email");
            $student->phone = $request->input("phone");
            $newData = $student->save();

            if ($newData) {
                return redirect("/")->with("success", "New Student Created in Database");
            } else {
                return redirect("/")->with("error", "Error while Creating New Student in Database");
            }
        }else{
            return redirect("/add");
        } */

        $result = $request->validate([
            "fname" => "required",
            "lname" => "required",
            "city" => "required",
            "email" => "required | email | unique:students,email",
            "phone" => "required"
        ], $request->all(), [
            "fname" => "First Name",
            "lname" => "Last Name",
            "city" => "City Name",
            "email" => "Email Address",
            "phone" => "Phone Number"
        ]);

        if ($result) {


            $student = new student();

            $student->fname = $request->input("fname");
            $student->lname = $request->input("lname");
            $student->city = $request->input("city");
            $student->email = $request->input("email");
            $student->phone = $request->input("phone");
            $newData = $student->save(); // permanent save

            if ($newData) {
                return redirect("/")->with("success", "New Student Created in Database");
            } else {
                return redirect("/")->with("error", "Error while Creating New Student in Database");
            }
        }else{
            return redirect("/");
        }
    }

    public function getAllStudents()
    {
        $studentsData = student::all();
        return view("welcome", ["studentsData" => $studentsData]);
    }

    public function deleteStudent($id = 0)
    {
        if ($id == 0) {
            return redirect("/")->with("error", "ID must Required to delete Data");
        } else {
            $studentData = student::find($id);

            if ($studentData) {
                $studentData->delete();
                return redirect("/")->with("success", "Data Deleted with ID $id");
            } else {
                return redirect("/")->with("error", "$id is Invalid for Delete Data");
            }
        }
    }

    public function getStudentforEdit($id = 0, Request $request)
    {
        if ($id == 0) {
            return redirect("/")->with("error", "ID must Required to Update Data");
        } else {
            $studentData = student::find($id);

            if ($studentData) {
                return view("/updatestudent", ["studentData" => $studentData]);
            } else {
                return redirect("/")->with("error", "$id is Invalid for Update Data");
            }
        }
    }

    public function updateStudentProcess(Request $request)
    {
        $studentData = student::find($request->input("id"));

        if ($studentData) {
            $studentData->fname = $request->fname;
            $studentData->lname = $request->lname;
            $studentData->city = $request->city;
            $studentData->email = $request->email;
            $studentData->phone = $request->phone;
            $studentData->save();

            return redirect("/")->with("success", "Student Data Updated");
        } else {
            return redirect("/")->with("error", "Invalid Id for Update Data");
        }
    }
}
