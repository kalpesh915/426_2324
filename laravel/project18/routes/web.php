<?php

use App\Models\student;
use App\Models\studentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accessordemo', [studentController::class, "getAllData"]);
Route::get('/mutetordemo', [studentController::class, "addNewData"]);
Route::get("/one2one", [studentController::class, "One2One"]);
Route::get("/one2many", [studentController::class, "One2Many"]);
Route::get("/student/{id}", function(student $id){
    return $id;
});

Route::get("/stringdemo", function(){
    $strData = "welcome to world of PHP Strings";
    echo "<hr> $strData";
    echo "<hr> ". Str::ucfirst($strData);
    echo "<hr> ". Str::upper($strData);
    echo "<hr> ". Str::lower($strData);
    echo "<hr> ". Str::camel($strData);
    echo "<hr> ". Str::replaceFirst('to', '2', $strData);
    echo "<hr> ". Str::of($strData)->camel()->ucfirst();
    echo "<hr> ". Str::before($strData, 'of');
    echo "<hr> ". Str::after($strData, 'of');
    echo "<hr> ". Str::repeat($strData, 5);
    echo "<hr> ". Str::words($strData, 4,"...");
    echo "<hr> ". Str::between($strData, 'to', 'of');
    echo "<hr> ". Str::contains($strData, 'to');
    echo "<hr> ". Str::startsWith($strData, 'welcome');
    echo "<hr> ". Str::endsWith($strData, 'Strings');
});
