@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="users-show">

  <div class="col-md-3 box">
    <div style="text-align: center;">
      @if($user->pic)
      <img src="{{$user->pic}}" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
      @else
      <img src="/images/avatar.jpg" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
      @endif
    </div>
<div class="clearfix"></div>
      <a class="btn btn-primary btn-block" href="/user/{{$user->uid}}/edit" id="user-edit-button">
      <i class="fa fa-edit"></i> 个人设置
    </a>
              
    </div>

  <div class="col-md-9 left-col">

    <div class="panel panel-default">

      <div class="panel-body ">
        <ul class="nav nav-tabs" role="tablist">
          <li ><a href="/user/{{$user->uid}}">个人信息</a></li>
          <li  class="active" ><a href="">头像</a></li>
          <li ><a href="/user/password/{{$user->uid}}">密码</a></li>
        </ul>
                <form class="form-horizontal" method="POST" action="/user/upload" enctype="multipart/form-data">
                {{ csrf_field() }}
                <h5><i class="fa fa-image"></i>&nbsp;&nbsp;头像设置</h5><hr>
                <div class="form-group">
                    <div class="col-sm-4 avatar-setting-container">
                        @if($user->pic)
                        <img src="{{$user->pic}}" id="avatar" class="upload-btn" style="cursor: pointer;">
                        @else
                       <img src="/images/avatar.jpg" id="avatar" class="upload-btn" style="cursor: pointer;">
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 status-post-submit">
                    <span class="loading"></span>
                    <input type="hidden" name="uid" value="{{$user->uid}}" >
                    <input type="file"  name="pic" class="btn btn-primary upload-btn">
                    <span class="help-block">
                        头像支持jpg和png格式，上传的文件大小不超过 2M</span>
                    </div>
                </div>
                <input type="submit" class="btn upload-btn" value="上传头像">
        </form>
              </div>
    </div>
  </div>


</div>
@endsection