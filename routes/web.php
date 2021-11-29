<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
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
    return view('index');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/join', function (){
    return view('join');
});

Route::post('/join_ok',[App\Http\Controllers\UserController::class,'join_ok']);

Route::post('/email_multiple',[App\Http\Controllers\UserController::class,'email_multiple']);

Route::get('ajaxRequest', [UserController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [UserController::class, 'ajaxRequestPost']);

Route::post('/login_ok',[App\Http\Controllers\UserController::class,'login_ok']);
Route::get('/logout',[App\Http\Controllers\UserController::class, 'logout']);
