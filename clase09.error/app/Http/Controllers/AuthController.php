<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function listUser(){
        return User::all();
    }

    public function createUser(Request $request)
    {
        /* $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->pasword)
        ]); */

        return response()->json([
            'status' => true,
            'message' => 'User created successfully',
            //'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 201);
    }

    public function loginUser(LoginRequest $request)
    {
        if(!Auth::attempt($request->only(['email', 'password']))){
            return response()->json([
                'status' => false,
                'message' => 'email or password do not match with our records',
            ], 401);
        }

        $user = User::where('email', $request->email)->first();
        return response()->json([
            'status' => true,
            'message' => 'User logged in succesfully',
            'token' => $user->createToken("API TOKEN")->plainTextToken
        ], 200);
    }
}
