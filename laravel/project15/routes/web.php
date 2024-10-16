<?php

use App\Http\Controllers\databasecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/add", [databasecontroller::class, "addData"]);
Route::get("/view", [databasecontroller::class, "viewData"]);
Route::get("/update", [databasecontroller::class, "updateData"]);
Route::get("/delete", [databasecontroller::class, "deleteData"]);
Route::get("/other", [databasecontroller::class, "otherData"]);
Route::get("/joindemo", [databasecontroller::class, "joinDemo"]);
