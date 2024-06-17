<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /* public function __construct()
    {
        $this->middleware('example');
    } */
    public function index()
    {
        return response()->json(["message" => "All too well!"], 200);
    }

    public function noAccess()
    {
        return response()->json(["message" => "Not allowed to enter here"], 200);
    }
}
