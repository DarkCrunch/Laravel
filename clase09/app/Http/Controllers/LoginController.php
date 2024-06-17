<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return User::all();
    }

    public function createUser(Request $request){
        return response()->json([
            'message' => 'tu mama la loca'
        ], 201);
    }
}
