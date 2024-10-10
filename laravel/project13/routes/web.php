<?php

use App\Http\Controllers\databasecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getalldata", [databasecontroller::class, "getAllData"]);
Route::get("/pagination", [databasecontroller::class, "getPagination"]);