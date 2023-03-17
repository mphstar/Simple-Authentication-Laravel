<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    if(Auth::check()){
        return redirect('/home');
    }
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->middleware('checkroles');

Route::post('/proses_register', [AuthController::class, 'register']);

Route::post('/proses_login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/home', function () {
        return "ini homepage " . Auth::user()->username;
    });
});