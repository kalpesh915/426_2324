<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getdemo", function(){
    return view("getdemo");
});

Route::get("/postdemo", function(){
    return view("postdemo");
});

Route::get("/getprocess", [formController::class, "getProcess"]);
Route::post("/postprocess", [formController::class, "postProcess"]);
