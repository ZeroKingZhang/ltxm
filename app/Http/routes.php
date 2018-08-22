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
//后台登录
Route::get('/admin/login/logout','Admin\LoginController@logout');
Route::resource('/admin/login','Admin\LoginController');


Route::group(['middleware'=>'adminlogin'],function(){
    //后台首页
    Route::get('/admin','Admin\AdminController@index');
    //后台用户管理
	Route::resource('/admin/user','Admin\UserController');
	//后台用户软删除管理
	Route::controller('/adminUser','Admin\DeleteController');
	//后台管理前台用户
	Route::resource('/admin/home/user','Admin\HomeUserController');
	//帖子管理
	Route::resource('/admin/invitation','Admin\InvitationController');
	Route::resource('/admin/forum','Admin\ForumController');
	Route::resource('/admin/forum/show1','Admin\ForumController@show1');
	Route::controller('/softdelete','Admin\softdeletesController');
	//敏感词管理
	Route::resource('/admin/sensitivity','Admin\SensitivityController');
	//友情链接管理
	Route::resource('/admin/blogroll','Admin\BlogrollController');
	//轮播图设置
	Route::resource('/admin/carousel','Admin\CarouselController');
	//申明设置
	Route::get('/declaration','Admin\AdminController@declaration');
	Route::get('/clause','Admin\AdminController@clause');
	Route::get('/copyright','Admin\AdminController@copyright');
	Route::resource('/admin/announcement','Admin\announcementController');
	//公告管理
	Route::get('/admin/announcement/disabled/{id}','Admin\announcementController@disabled');
	Route::get('/admin/announcement/start/{id}','Admin\announcementController@start');
});