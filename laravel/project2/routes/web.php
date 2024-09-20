<?php

use App\Http\Controllers\myController;
use App\Http\Controllers\myController1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function(){
    return view("about");
});

// Route::get("/contact", function(){
//     return view("contact");
// });


/*Route::get("/login", function(){
    return view("login");
});*/

// Route::view("/login", "login");

Route::get("/login/{fname}", function($fname){
    // echo "Welcome $fname";
    return view("login", ["fname"=> $fname]);
});

// Route::get("/greet/{fname}/{lname}", function($fname, $lname){
//     return view("greetings", ["fname" => $fname, "lname" => $lname]);
// });

// Route::get("/greet/{fname?}/{lname?}", function($fname="", $lname="Rajkot"){
//     return view("greetings", ["fname" => $fname, "lname" => $lname]);
// });

// Route::get("/contact", function(){
//     return redirect("/");
// });

// Route::get("/greet/{fname}/{lname}", function($fname, $lname){
//     return view("greetings", ["fname" => $fname, "lname" => $lname]);
// })->whereAlpha("fname")->whereAlpha("lname");

Route::get("/greet/{fname}/{lname}", function($fname, $lname){
    return view("greetings", ["fname" => $fname, "lname" => $lname]);
})->whereNumber("fname")->whereAlphaNumeric("lname");

// Route::get("/controller1", [myController::class, "index"]);
// Route::get("/controller", "myController@index"); //old syntax

Route::get("/controller1/{fname}/{lname}", [myController::class, "index"]);
