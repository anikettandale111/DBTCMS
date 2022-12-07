<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//// PASSPORT //////

Route::get('/',[ApiController::class,'index'])->name('api-home');
Route::post('/register',[ApiController::class,'register'])->name('api-register');
Route::post('/login',[ApiController::class,'login'])->name('api-login');
// Route::get('/login',[ApiController::class,'login'])->name('login');
Route::middleware('auth:api')->get('/user_details',[ApiController::class,'getUserList'] )->name('api-user-list');
Route::middleware('auth:api')->get('/user/{id}',[ApiController::class,'getUserById'] )->name('api-user-info');