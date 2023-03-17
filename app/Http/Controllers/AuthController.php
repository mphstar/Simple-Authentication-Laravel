<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "nama" => "required|string",
            "password" => "required|string",
            "username" => "required|string|unique:users"
        ]);

        DB::table('users')->insert([
            'nama' => $request->nama,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'level' => $request->roles
        ]);

        return redirect()->route('login')->with(['sukses' => "Berhasil Register"]);
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            "username" => "required|string",
            "password" => "required|string",
        ]);
        $credential = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credential)) {
            return redirect('/home');
        }


        return redirect()->route('login')->with("error", "Username atau password salah");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
