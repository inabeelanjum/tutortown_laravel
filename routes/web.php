<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\requestController;
use App\Http\Controllers\profileC;
use App\Http\Controllers\notiController;
use App\Http\Controllers\msgsController;
use App\Http\Controllers\TutorsController;
use App\Http\Controllers\hiringController;
use App\Http\Controllers\search;
use App\Http\Controllers\reviewController;
use App\Http\Controllers\reportC;

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
Route::get('/admin', [admin::class ,'index'])->middleware('auth');
Route::get('/', [search::class ,'index'])->middleware('auth');
Route::post('/search', [search::class ,'searchtutor'])->name('search')->middleware('auth');
Route::get('/notifications', [notiController::class ,'all_notifications'])->name('notifications')->middleware('auth');
Route::get('/request', [requestController::class ,'index'])->name('request')->middleware('auth');
Route::get('/postr', [requestController::class ,'postr'])->name('postr')->middleware('auth');
Route::post('/creater', [requestController::class ,'creater'])->name('creater')->middleware('auth');
Route::get('/requests', [requestController::class ,'show'])->name('requests')->middleware('auth');
Route::post('/replyr/{id}', [requestController::class ,'replyr'])->name('replyr')->middleware('auth');
Route::get('/replyreq/{user_id}', [requestController::class ,'replyreq'])->name('replyreq')->middleware('auth');
Route::get('/tutors', [TutorsController::class ,'tutors_list'])->name('tutors_list')->middleware('auth');
Route::get('/tutor/profile/{id}', [TutorsController::class ,'tutor_profile'])->name('tutor_profile')->middleware('auth');
Route::post('/editpro', [profileC::class ,'editpro'])->name('editpro')->middleware('auth');
Route::get('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat')->middleware('auth');
Route::post('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat')->middleware('auth');
Route::get('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat')->middleware('auth');
Route::post('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat')->middleware('auth');
Route::post('/send-message/{id}', [msgsController::class ,'send_message'])->name('send_message')->middleware('auth');
Route::post('/message-heartbeat/{id}', [msgsController::class ,'messgae_heartbeat'])->name('messgae_heartbeat')->middleware('auth');
Route::post('/hire-me/{id}', [hiringController::class ,'hire_me'])->name('hire_me')->middleware('auth');
Route::get('/post-review/{id}', [reviewController::class ,'post_review_form'])->middleware('auth');
Route::post('/review/{id}', [reviewController::class ,'review_submit'])->name('review')->middleware('auth');
Route::post('/update-my-location', [search::class ,'updateloc'])->name('update-my-location')->middleware('auth');
Route::get('/chat', [msgsController::class ,'chat'])->name('chat')->middleware('auth');
Route::post('/respond-hiring-request/{id}', [msgsController::class ,'respond_hiring_request'])->name('respond_hiring_request')->middleware('auth');
Route::get('/editp', [profileC::class ,'editp'])->name('editp')->middleware('auth');
Route::get('/nearby', [search::class ,'searchNearByTutor'])->name('nearby')->middleware('auth');
Route::get('/profile', [profileC::class ,'profile'])->middleware('auth');
Route::get('/pro', [profileC::class ,'index'])->middleware('auth');
Route::get('/chat', [msgsController::class ,'chat'])->middleware('auth');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/admin', [App\Http\Controllers\admin::class, 'index'])->name('admin')->middleware('auth');
Route::get('/warning/{id}', [App\Http\Controllers\admin::class, 'warning'])->name('warning')->middleware('auth');
Route::get('/delete_account/{id}', [App\Http\Controllers\admin::class, 'delete_account'])->name('delete_account')->middleware('auth');
Route::get('/delete_comment/{id}', [App\Http\Controllers\admin::class, 'delete_comment'])->name('delete_comment')->middleware('auth');
Route::get('/delete/{id}', [App\Http\Controllers\admin::class, 'delete_request'])->name('delete')->middleware('auth');
Route::get('/report_comment/{id}', [App\Http\Controllers\reportC::class, 'report_comment'])->name('report_comment')->middleware('auth');
Route::get('/report/{id}', [App\Http\Controllers\reportC::class, 'report'])->name('report')->middleware('auth');
Route::post('/report_submit/{id}', [App\Http\Controllers\reportC::class, 'report_submit'])->name('report_submit')->middleware('auth');


