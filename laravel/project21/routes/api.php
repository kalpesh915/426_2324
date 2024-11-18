<?php

use App\Http\Controllers\apiController;
use App\Http\Controllers\studentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("/users", [apiController::class, "index"]);

Route::group(["middleware" => 'auth:sanctum'], function(){
    Route::get("/students", [studentController::class, "index"]);
});

// Route::middleware("api")->group(function(){
    
// });

