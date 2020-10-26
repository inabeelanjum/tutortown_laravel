<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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

Route::get('/index', function () {
    return view('layout/index');
    
});
Route::get('/notifications', function () {
  return view('layout/notifications');
});
Route::get('/requests', function () {
  return view('layout/requests');
});
Route::get('/nlogin', function () {
  return view('layout/nlogin');
});
Route::get('/nsignup', function () {
  return view('layout/signUp');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
