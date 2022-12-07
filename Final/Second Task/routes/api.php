<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Admins\planCreateCotroller;
use App\Http\Controllers\Auth\Admins\productsCreateController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/plan/list',[planCreateCotroller::class,'APIlist']);

Route::post('/plan/create',[planCreateCotroller::class,'planCreateapi']);

Route::get('/productget/list',[productsCreateController::class,'productgetapi']);

Route::post('/product/create',[productsCreateController::class,'productCreateapi']);
