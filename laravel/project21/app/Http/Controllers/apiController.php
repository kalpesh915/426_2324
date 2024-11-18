<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class apiController extends Controller
{
    //
    public function index(Request $request) {
        $user = User::where("email", $request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                "message" => "Invalid Username or Password"
            ], 404);
        }else{
            $token = $user->createToken('my-token')->plainTextToken;

            return response([
                "message" => "Login Successfully",
                "user" => $user,
                "token" => $token
            ], 200);
        }
    }
}
