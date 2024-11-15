<?php

use App\Http\Controllers\student1Controller;
use App\Http\Controllers\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/students/{id?}', [studentController::class, "getStudents"]);
Route::post('/students', [studentController::class, "addNewStudent"]);

Route::resource("/demo", student1Controller::class);