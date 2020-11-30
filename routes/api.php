<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\requestController;
use App\Http\Controllers\profileC;
use App\Http\Controllers\notiController;
use App\Http\Controllers\msgsController;
use App\Http\Controllers\TutorsController;
use App\Http\Controllers\hiringController;
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

Route::get('/tutors', [TutorsController::class ,'tutors_list'])->name('tutors_list');
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
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
