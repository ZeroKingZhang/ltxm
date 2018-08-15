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
    return view('home.index');
});

//前台注册
Route::resource('/register','Home\RegisterController');

//前台登录
Route::resource('/login','Home\LoginController');
//后台首页
Route::get('/admin','Admin\AdminController@index');

//后台用户管理
Route::resource('/admin/user','Admin\UserController');
//后台管理前台用户
Route::resource('/admin/home/user','Admin\HomeUserController');

//帖子管理
Route::resource('/admin/invitation','Admin\InvitationController');
Route::resource('/admin/forum','Admin\ForumController');
Route::resource('/admin/forum/show1','Admin\ForumController@show1');

//轮播图设置
Route::resource('/admin/carousel','Admin\CarouselController');