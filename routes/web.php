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

Route::get('/test2', function () {		//uri가 /test2 일 때,
    return view('welcome');		//views/a/test2를 보여주고, 'name'안에는 '이름이름'을 넣어라
});


Route::get('/', function () {
    return view('index');
});

Route::get('/login', function (){
    return view('login');
});

Route::get('/join', function (){
    return view('join');
});

Route::get('/find_email', function (){
    return view('find_email');
});

Route::post('/join_ok',[App\Http\Controllers\UserController::class,'join_ok']); //회원가입

Route::post('/email_multiple',[App\Http\Controllers\UserController::class,'email_multiple']); //이메일 중복확인

Route::get('ajaxRequest', [UserController::class, 'ajaxRequest']);
Route::post('ajaxRequest', [UserController::class, 'ajaxRequestPost']);

Route::post('/login_ok',[App\Http\Controllers\UserController::class,'login_ok']); //로그인
Route::get('/logout',[App\Http\Controllers\UserController::class, 'logout']); //로그아웃

Route::get('/find_email',[App\Http\Controllers\UserController::class,'find_email']); //이메일 찾기
