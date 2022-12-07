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

Route::get('/admin-dashboard', [App\Http\Controllers\AdminController::class, 'adminDashboard'])->name('admin-dashboard');
Route::get('/principal-dashboard', [App\Http\Controllers\PrinipalController::class, 'principalDashboard'])->name('principal-dashboard');
Route::get('/clerk-dashboard', [App\Http\Controllers\ClerkController::class, 'clerkDashboard'])->name('clerk-dashboard');
Route::get('/po-dashboard', [App\Http\Controllers\PoController::class, 'poDashboard'])->name('po-dashboard');

Route::get('/student-list', [App\Http\Controllers\StudentController::class, 'studentsList'])->name('student-list');
Route::get('/student-aadhaar-list', [App\Http\Controllers\StudentController::class, 'studentAadhaarAuthenticationList'])->name('student-aadhaar-list');
Route::get('/student-renewal', [App\Http\Controllers\StudentController::class, 'studentRenewal'])->name('student-renewal');


Route::get('/student-add', [App\Http\Controllers\StudentController::class, 'index'])->name('student-add');
Route::post('/student-insert', [App\Http\Controllers\StudentController::class, 'store'])->name('student-insert');
Route::post('/update-student-aadhaar', [App\Http\Controllers\StudentController::class, 'updateStudentAadhaar'])->name('update-student-aadhaar');
Route::post('/update-aadhaar-authentication', [App\Http\Controllers\StudentController::class, 'updateStudentAadhaarAuthentication'])->name('update-aadhaar-authentication');


Route::post('/show-all-city', [App\Http\Controllers\StudentController::class, 'showCityByDistrict'])->name('show-all-city');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');