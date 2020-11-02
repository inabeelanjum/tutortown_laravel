<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return 'hiiii';
}); */
/* Route::get('/user', function (Request $request) {
    return $request->user();
    // Access token has either "check-status" or "place-orders" scope...

}); */

    Route::group(['middleware' => ['auth:api']], function () {
        /* 
        it is working now, 
        @Problem: following line was commented out in App\Providers\RouteServiceProvider.php
        protected $namespace = 'App\\Http\\Controllers';
        */
        Route::any('/user', 'AuthController@user')->name('user');
    });

Route::any('/login', [App\Http\Controllers\AuthController::class, 'login'])->name('login');