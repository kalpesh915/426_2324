<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class databaseController extends Controller
{
    //
    public function index() {
        return student::all();
        //return DB::connection("mysql1")->table("students")->get();
    }
}
