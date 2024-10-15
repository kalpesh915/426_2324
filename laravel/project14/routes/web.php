<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [studentController::class, "getAllStudents"]);

Route::get("/add", function(){
    return view("addstudent");
});

Route::get("/delete/{id?}", [studentController::class, "deleteStudent"]);
Route::get("/editstudent/{id?}", [studentController::class, "getStudentforEdit"]);
Route::post("/addprocess", [studentController::class, "addNewStudentProcess"]);
Route::post("/updateprocess", [studentController::class, "updateStudentProcess"]);