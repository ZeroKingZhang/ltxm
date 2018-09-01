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

//公告详情
Route::get('/announcement/{id}','Home\HomeController@announcement');
//前台首页
Route::resource('/','Home\HomeController');
//前台注册
Route::resource('/register','Home\RegisterController');
//前台退出
Route::get('/logout','Home\LoginController@logout');
//前台登录
Route::resource('/login','Home\LoginController');
//问题与反馈
Route::resource('/process','Home\ProcessController');
//排行榜
Route::resource('/charts','Home\ChartsController');
//发帖
Route::resource('/post','Home\PostController');

//前台版块列表
Route::resource('/forum','Home\ForumController');
//板块帖子列表
Route::resource('/list','Home\ListController');
//帖子列表
Route::resource('/invitation','Home\InvitationController');
//帖子详情
Route::resource('/note','Home\NoteController');
//用户详细信息
Route::get('/user/invitation/{id}','Home\UserinfoController@invitation');//用户发帖信息
Route::get('/user/note/{id}','Home\UserinfoController@note');//用户回复信息
Route::get('/user/pic/{id}','Home\UserinfoController@pic');//用户图片上传
Route::get('/user/password/{id}','Home\UserinfoController@password');//用户密码修改
Route::post('/user/upload','Home\UserinfoController@upload');//用户图片上传
Route::resource('/user','Home\UserinfoController');

//--------前台路由组
Route::group(['middleware'=>'homelogin'],function(){
	//前台个人信息
	
});














//-----------后台路由

//后台退出登录
Route::get('/admin/login/logout','Admin\LoginController@logout');
//后台登录
Route::resource('/admin/login','Admin\LoginController');
//--------后台路由组
Route::group(['middleware'=>'adminlogin'],function(){
//后台首页
Route::get('/admin','Admin\AdminController@index');
//后台用户管理
Route::resource('/admin/user','Admin\UserController'); 
//后台用户软删除管理
Route::resource('/admin/user','Admin\UserController');
Route::resource('/admin/user','Admin\UserController');
//后台管理前台用户
Route::resource('/admin/home/user','Admin\HomeUserController');
//帖子管理
Route::resource('/admin/invitation','Admin\InvitationController');
//版块管理
Route::resource('/admin/forum','Admin\ForumController');
Route::resource('/admin/forum/show1','Admin\ForumController@show1');
//反馈管理
Route::resource('/admin/process','Admin\ProcessController');
Route::resource('/admin/processdelete','Admin\ProcessDeleteController');
//版块软删除管理
Route::controller('/forumdelete','Admin\ForumdeleteController');
Route::controller('/softdelete','Admin\softdeletesController');
Route::resource('/admin/invitation','Admin\InvitationController');
Route::resource('/admin/forum','Admin\ForumController');
Route::resource('/admin/forum/show1','Admin\ForumController@show1');
//软删除
Route::controller('/invitation/softdeletes','Admin\SoftdeletesController');
//敏感词管理
Route::resource('/admin/sensitivity','Admin\SensitivityController');
Route::resource('/admin/sensitivity/show1','Admin\SensitivityController@show1');
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
Route::get('/admin/announcement/disabled/{id}','Admin\AnnouncementController@disabled');
Route::get('/admin/announcement/start/{id}','Admin\AnnouncementController@start');
});