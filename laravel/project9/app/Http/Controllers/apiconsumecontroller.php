<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiconsumecontroller extends Controller
{
    //
    public function getAllProducts(){
        $productsData = Http::get("https://dummyjson.com/products");
        //return $productsData;
        return view("listproducts", ["products"=>$productsData["products"]]);
    }
}
