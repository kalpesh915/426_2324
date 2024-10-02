<?php

use App\Http\Controllers\apiconsumecontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getproducts", [apiconsumecontroller::class, "getAllProducts"]);
