<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\requestController;
use App\Http\Controllers\profileC;
use App\Http\Controllers\notiController;
use App\Http\Controllers\msgsController;
use App\Http\Controllers\TutorsController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\hiringController;
use App\Http\Controllers\search;
use App\Http\Controllers\reviewController;
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

Route::post('/search', [search::class ,'searchtutor'])->name('search');
Route::post('/tutors', [TutorsController::class ,'tutors_list'])->name('tutors_list');
//Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();
//});
Route::get('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat');
Route::any('/hire-me/{id}', [hiringController::class ,'hire_me'])->name('hire_me');
Route::get('/', function () {
    //return view('welcome');
    $uSER = 
    $users = User::all();
    echo '<pre>';
    echo $users;
    echo '</pre>';
});

Route::group(['middleware' => ['auth:api']], function () {
    /* 
    it is working now, 
    @Problem: following line was commented out in App\Providers\RouteServiceProvider.php
    protected $namespace = 'App\\Http\\Controllers';
    */
    Route::post('/replyr/{id}', [requestController::class ,'replyr'])->name('replyr');
    Route::post('/review/{id}', [reviewController::class ,'review_submit'])->name('review');
    Route::any('/user', [AuthController::class ,'user'])->name('user');
    Route::get('/tutor/profile/{id}', [TutorsController::class ,'tutor_profile'])->name('tutor_profile');
    Route::get('/requests', [requestController::class ,'show'])->name('requests');
    Route::post('/creater', [requestController::class ,'creater'])->name('creater');
    Route::get('/profile', [profileC::class ,'profile']);
    Route::post('/editpro', [profileC::class ,'editpro'])->name('editpro');
});

Route::any('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::any('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');