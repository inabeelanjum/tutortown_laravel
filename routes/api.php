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
use App\Http\Controllers\reportC;
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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
   // return $request->user();
//});
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
    Route::any('/all_chat_api/{id}', [notiController::class ,'all_message_api']);
    Route::any('/chat_api/{id}', [notiController::class ,'message_api']);
    Route::post('/respond-hiring-request/{id}', [msgsController::class ,'respond_hiring_request'])->name('respond_hiring_request');
    Route::post('/update-my-location', [search::class ,'updateloc'])->name('update-my-location');
    Route::post('/send-message/{id}', [msgsController::class ,'send_message'])->name('send_message');
    Route::get('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat');
    Route::post('/user/chat/{id}', [msgsController::class ,'tutor_to_student_chat'])->name('tutor_to_student_chat');
    Route::get('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat');
    Route::post('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat'); 

    Route::get('/chat', [msgsController::class ,'chat'])->name('chat');
    Route::get('/chatList', [profileC::class ,'all_chat_list']);
    Route::post('/report/{id}', [reportC::class ,'report_api']);
   

    Route::get('/nearby', [search::class ,'searchNearByTutor'])->name('nearby');
    Route::post('/search', [search::class ,'searchtutor'])->name('search');
    Route::post('/tutors', [TutorsController::class ,'tutors_list'])->name('tutors_list');
    Route::any('/hire-me/{id}', [hiringController::class ,'hire_me'])->name('hire_me');
    Route::any('/getHiring', [hiringController::class ,'get_hiring']);
    Route::any('/accept_hiring/{id}', [hiringController::class ,'accept_hiring']);
    Route::any('/reject_hiring/{id}', [hiringController::class ,'reject_hiring']);
    Route::post('/replyr/{id}', [requestController::class ,'replyr'])->name('replyr');
  
    Route::any('/user', [AuthController::class ,'user'])->name('user');
    Route::get('/tutor/profile/{id}', [TutorsController::class ,'tutor_profile'])->name('tutor_profile');
    Route::get('/requests', [requestController::class ,'show'])->name('requests');
    Route::post('/creater', [requestController::class ,'creater'])->name('creater');
    Route::get('/profile', [profileC::class ,'profile']);
    Route::get('/skill', [profileC::class ,'skill_api']);
    Route::get('/get_review', [profileC::class ,'get_review_api']);
    Route::post('/editpro', [profileC::class ,'editpro'])->name('editpro');
    Route::any('/hire-me/{id}', [hiringController::class ,'hire_me'])->name('hire_me');
    Route::get('/notifications', [notiController::class ,'all_notifications'])->name('notifications');
    Route::post('/message-heartbeat/{id}', [msgsController::class ,'messgae_heartbeat_android'])->name('messgae_heartbeat_android');
    Route::get('/tutor/chat/{id}', [msgsController::class ,'student_to_tutor_chat'])->name('student_to_tutor_chat');
    Route::post('/review/{id}', [reviewController::class ,'api_review']);
    

});

Route::any('/stars/{id}', [TutorsController::class ,'profile_star']);
Route::any('/tutor_review/{id}', [TutorsController::class ,'profile_review']);
Route::any('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::any('/register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');