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
Route::resource('/admin','Admin\AdminController');

//后台用户管理
Route::resource('/user','Admin\UserController');
//后台管理前台用户
Route::resource('/adminuser','Admin\HomeUserController');

//帖子管理
Route::resource('/adminInvitation','Admin\InvitationController');
Route::resource('/forum','Admin\ForumController');
Route::resource('/forum/show1','Admin\ForumController@show1');
//敏感词管理
Route::resource('/sensitivity','Admin\SensitivityController');
//友情链接管理
Route::resource('/blogroll','Admin\BlogrollController');


