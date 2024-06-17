<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        //dd('This is an index get method()');
        //recuperar registro completo
        $users = User::all();
        //busqueda condicional
        //$users = User::where('age','>=',18)->orWhere()...->get();
        //busqueda por paginacion
        //$users = User::where('age', '>=', 25)->orderby('age', 'asc')->limit(3, 10)->get();
        //busqueda por rango
        //$users = User::where('age', '>=', 25)->first();
        //busqueda por id
        //$users = User::find(1);
        //$age = 30;
        //$users = DB::select(DB::raw("SELECT * FROM USERS WHERE AGE='$age'"));
        return view('index', compact('users'));
    }

    public function create()
    {
        //DB::insert(DB::raw("INSERT INTO"))
        $user = new User;
        $user->name = 'Aaron';
        $user->email = 'demo@demo.com';
        $user->password = Hash::make('123456');
        $user->age = 29;
        $user->address = 'Coop. Almirante Grau M4';
        $user->zip_code = 11601;
        $user->save();

        User::create([
            'name' => 'Alejandro',
            'email' => 'info@demo.com',
            'password' => Hash::make('123456'),
            'age' => 25,
            'address' => 'Coop. Almirante Grau M4',
            'zip_code' => 16000
        ]);

        User::create([
            'name' => 'Roberto',
            'email' => 'info1@demo.com',
            'password' => Hash::make('123456'),
            'age' => 26,
            'address' => 'Coop. Almirante Grau M4',
            'zip_code' => 16000
        ]);

        User::create([
            'name' => 'Fernando',
            'email' => 'info2@demo.com',
            'password' => Hash::make('123456'),
            'age' => 27,
            'address' => 'Coop. Almirante Grau M4',
            'zip_code' => 16000
        ]);

        User::create([
            'name' => 'Valentino',
            'email' => 'info3@demo.com',
            'password' => Hash::make('123456'),
            'age' => 32,
            'address' => 'Coop. Almirante Grau M4',
            'zip_code' => 16000
        ]);

        return redirect()->route('user.index');
    }
}
