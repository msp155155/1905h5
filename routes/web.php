<?php

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
//
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/','Index\IndexController@index');  //首页

Route::get('/user/reg','User\UserController@reg');//注册页面
Route::get('/user/login','User\UserController@login');//登陆页面
Route::post('/user/regDo','User\UserController@regDo');//注册执行
Route::post('/user/loginDo','User\UserController@loginDo');//登陆执行


