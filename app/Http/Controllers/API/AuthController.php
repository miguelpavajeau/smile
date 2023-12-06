<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function signup(Request $request){
        $userData = User::create($request->except('pasword_confirmation'));
        return response()->json(['message'=>"User Added", 'userData'=>$userData,"statusCode"=>200]);
    }
}
