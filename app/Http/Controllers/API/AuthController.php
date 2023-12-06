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

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    //Metodo Login
    public function login()
    {
        $credentials = request(['email', 'password']);
        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Revisar datos ingresados'], 401);
        }
        return $this->respondWithToken($token);
    }
}
