<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//前台注册
Route::resource('/register','Home\RegisterController');
//前台登录
Route::resource('/login','Home\LoginController');
//后台首页
Route::get('/adminlogin','Admin\AdminController@login');					
Route::get('/adminloginpost','Admin\AdminController@loginpost');					
Route::resource('/admin','Admin\AdminController');


//后台用户管理
Route::resource('/user','Admin\UserController');
//后台管理前台用户
Route::resource('/adminuser','Admin\HomeUserController');