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

//后台用户管理
Route::resource('/admin','Admin\RegisterController');
Route::resource('/user','Admin\UserController');


