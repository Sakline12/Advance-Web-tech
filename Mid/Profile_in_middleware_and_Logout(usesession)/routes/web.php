<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateController;
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
// Route::get('/profile', function () {
//     return view('profile');
// });
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('login');
});
Route::get('/register', [RegisterController::class, 'submit']);
Route::post('/register', [RegisterController::class, 'get_register']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/startlogin', [LoginController::class, 'checklogin']);

// Route::get('edit/{id}','UpdateController@show');
// Route::post('edit/{id}','UpdateController@edit');
Route::get('/update', [UpdateController::class, 'show']);
Route::post('/startupdate', [UpdateController::class, 'goupdate']);

Route::get('/profile', [ProfileController::class,'profile'])->middleware('checkLogin');
