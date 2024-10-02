<?php

use App\Http\Middleware\msgMiddleware;
use Illuminate\Support\Facades\Route;

Route::view("/", "home");

Route::middleware("greetings")->group(function () {
    Route::view("/about", "about");
    Route::view("/services", "services");
    Route::view("/products", "products");
    Route::view("/contact", "contact");
    Route::view("/login", "login");
});

Route::view("/errors", "errors");
// routed middleware
Route::fallback(function () {
    return view("errors");
})->middleware(msgMiddleware::class);
