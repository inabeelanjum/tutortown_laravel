<?php

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

Route::get('/proi', function () {
    return view('layout/proi');
    
});
// make authenticated routes.
Route::get('/notifications', [notiController::class ,'index'])->name('notifications');
Route::get('/request', [requestController::class ,'index'])->name('request');
Route::get('/postr', [requestController::class ,'postr'])->name('postr');
Route::post('/creater', [requestController::class ,'creater'])->name('creater');
Route::get('/requests', [requestController::class ,'show'])->name('requests');
Route::post('/replyr/{id}', [requestController::class ,'replyr'])->name('replyr');
Route::get('/replyreq/{user_id}', [requestController::class ,'replyreq'])->name('replyreq');
Route::get('/tutors', [TutorsController::class ,'tutors_list'])->name('tutors_list');
Route::get('/tutor/profile/{id}', [TutorsController::class ,'tutor_profile'])->name('tutor_profile');
Route::post('/editpro', [profileC::class ,'editpro'])->name('editpro');

Route::get('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat');
Route::post('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat');
Route::get('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat');
Route::post('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat');
Route::post('/send-message/{id}', [msgsController::class ,'send_message'])->name('send_message');
Route::post('/message-heartbeat/{id}', [msgsController::class ,'messgae_heartbeat'])->name('messgae_heartbeat');
Route::post('/hire-me/{id}', [hiringController::class ,'hire_me'])->name('hire_me');



Route::get('/editp', [profileC::class ,'editp'])->name('editp');

Route::get('/profile', [profileC::class ,'profile']);
Route::get('/pro', [profileC::class ,'index']);

Route::get('/chat', [msgsController::class ,'chat']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


