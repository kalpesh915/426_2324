<?php

use App\Http\Controllers\formcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

/*Route::get("/home", function(){
    return view("home");
});*/

Route::middleware("login")->group(function(){
    Route::view("/home", "home");
    Route::view("/about", "about");
    Route::view("/services", "services");
    Route::view("/products", "products");
    Route::view("/contact", "contact");
    Route::view("/fileupload", "fileupload");
    
    Route::post("/uploadprocess", [formcontroller::class, "uploadProcess"]);
    
    Route::get("/logout", function(){
        if(session("email")){
            session()->pull("email");
            session()->flash("success", "Logout Successfully");
        }else{
            session()->flash("error", "Invalid Logout Attempt");
        }
        return redirect("/");
    });
});

Route::fallback(function(){
    return view("error");
});

Route::post("/loginprocess" ,[formcontroller::class, "loginProcess"]);