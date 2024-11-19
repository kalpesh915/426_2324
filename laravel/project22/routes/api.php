<?php

use App\Http\Controllers\databaseController;
use App\Http\Controllers\formController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/fileupload", [formController::class, "uploadFile"]);
Route::get("/students", [databaseController::class, "index"]);