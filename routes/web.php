<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\requestController;
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
Route::get('/request', [requestController::class ,'index'])->name('request');
Route::get('/postr', [requestController::class ,'postr'])->name('postr');
Route::post('/creater', [requestController::class ,'creater'])->name('creater');
Route::get('/requests', [requestController::class ,'show'])->name('requests');

Route::get('/nlogin', function () {
  return view('layout/nlogin'); 
});
Route::get('/nsignup', function () {
  return view('layout/signUp');
});

Route::get('/editp', function () {
  return view('layout/profile_edit');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


