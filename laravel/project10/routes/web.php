<?php

use App\Http\Controllers\formcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("getform", function(){
    return view("forms.getform");
});

Route::get("postform", function(){
    return view("forms.postform");
});

Route::get("putform", function(){
    return view("forms.putform");
});

Route::get("deleteform", function(){
    return view("forms.deleteform");
});

Route::get("flashpage", function(){
    return view("flashpage");
});

Route::get("/flashdemo", [formcontroller::class, "flashDemo"]);
Route::get("/getprocess", [formcontroller::class, "getProcess"]);
Route::post("/postprocess", [formcontroller::class, "postProcess"]);
Route::put("/putprocess", [formcontroller::class, "putProcess"]);
Route::delete("/deleteprocess", [formcontroller::class, "deleteProcess"]);
