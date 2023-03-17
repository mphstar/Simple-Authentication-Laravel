<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request){
        $request->validate([
            "txt_nama" => "required",
            "txt_password" => "required",
        ]);

        DB::table('users')->insert([
            'nama' => $request->txt_nama,
            'username' => $request->txt_username,
            'password' => Hash::make($request->txt_password),
            'level' => $request->roles
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request){
        $credential = $request->validate([
            "username" => "required",
            "password" => "required",
        ]);

        if(Auth::attempt($credential)){
            return redirect('/home');
        }


        return redirect()->route('login');

    }
}
