<?php

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
    return view('auth.login');
});
Auth::routes();

Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'adminDashboard']);
Route::get('/student-dashboard', [App\Http\Controllers\StudentController::class, 'studentDashboard']);

Route::get('/student_list', [App\Http\Controllers\StudentController::class, 'studentsList'])->name('student_list');

Route::get('/student_add', [App\Http\Controllers\StudentController::class, 'index'])->name('student_add');
Route::post('/student_insert', [App\Http\Controllers\StudentController::class, 'store']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
