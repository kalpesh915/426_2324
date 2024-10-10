<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/readstory/{lang?}", function($lang = "en"){
    App::setlocale($lang);
    return view('story');
});