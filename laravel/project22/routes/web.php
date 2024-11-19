<?php

use App\Http\Controllers\sample;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

// Route::get("/index1", [sample::class, "index1"]);
// Route::get("/index2", [sample::class, "index2"]);
// Route::get("/index3", [sample::class, "index3"]);

Route::controller(sample::class)->group(function(){
    Route::get("/index1", "index1");
    Route::get("/index2", "index2");
    Route::get("/index3", "index3");
    Route::get("/index4", function(){
        return Blade::render("<h1>Inline Blade Template</h1>");
    });
    Route::get("/index5", function(){
        $username = "Devangi Dave";
        return Blade::render("<h1>Welcome {$username} to Inline Blade Template</h1>", ["username" => $username]);
    });
});