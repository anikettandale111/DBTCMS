<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserAuthenticationController;


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
    return view('auth/login');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/dashboard', [App\Http\Controllers\UserAuthenticationController::class, 'index'])->name('dashboard');

Route::get('/student_list', [App\Http\Controllers\StudentController::class, 'studentsList'])->name('student_list');

Route::get('/student_add', [App\Http\Controllers\StudentController::class, 'index'])->name('student_add');
Route::post('/student_insert', [App\Http\Controllers\StudentController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
