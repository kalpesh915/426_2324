<?php

use App\Http\Controllers\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// GET
Route::get("/students/{id?}", [studentController::class, "getAllData"]);
Route::get("/search/{fname?}", [studentController::class, "searchData"]);
// POST
Route::post("/students", [studentController::class, "addNewStudent"]);
// PUT
Route::put("/students/{id?}", [studentController::class, "updateStudent"]);
// DELETE
Route::delete("/students/{id?}", [studentController::class, "deleteData"]);