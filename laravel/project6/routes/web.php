<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getprocess", [formController::class, "getProcess"]);
Route::post("/postprocess", [formController::class, "postProcess"]);

Route::view("/getexample", "getexample");
Route::view("/postexample", "postexample");
