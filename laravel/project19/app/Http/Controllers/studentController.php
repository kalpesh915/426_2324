<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    // GET Data From Database
    public function getAllData($id=0){
        if($id == 0){
            return student::all();
        }else{
            $studentData = student::find($id);

            if($studentData == null){
                return "No Data Found with ID $id";
            }else{
                return $studentData;
            }
        }
    }

    // serach data
    public function searchData($fname){
        return student::where("fname", "like", "%".$fname."%")->get();
    }

    // Insert New Data in Database
    public function addNewStudent(Request $request){
        $student = new student();

        $student->fname = $request->input("fname");
        $student->lname = $request->input("lname");
        $student->city = $request->input("city");
        $student->save();
        return "New Student Created in Table";
    }

    // Update Data
    public function updateStudent($id=0, Request $request){
        if($id == 0){
            return "Unable to Update Data in Database";
        }else{
            $studentData = student::find($id);
            // check for data is exist or not
            if($studentData == null){
                return "Invalid ID $id for Update Data";
            }else{
                $studentData->fname = $request->input("fname");
                $studentData->lname = $request->input("lname");
                $studentData->city = $request->input("city");
                $studentData->save();

                return "Data Updated with ID $id";
            }
        }
    }

    // delete data
    public function deleteData($id = 0){
        if($id == 0){
            return "Unbale to Delete Data From Table";
        }else{
            $studentData = student::find($id);

            if($studentData == null){
                return "Invalid ID $id for Delete Data";
            }else{
                $studentData->delete();
                return "Data Deleted with ID $id";
            }
        }
    }
}
