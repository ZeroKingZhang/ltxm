@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
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
          <li ><a href="/user/pic/{{$user->uid}}">头像</a></li>
          <li  class="active" ><a href="">密码</a></li>
        </ul>
   <form class="form-horizontal" method="post" action="/user" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h5><i class="fa fa-wrench"></i>&nbsp;&nbsp;密码设置</h5><hr>
            <input type="hidden" name="uid" value="{{$user->uid}}">
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="opwd" placeholder="请输入您当前的密码" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="upwd" placeholder="请输入新密码" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="reupwd" placeholder="请再次输入新密码" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4 status-post-submit">
                <button type="submit" class="btn btn-primary" id="update-password">修改密码</button>
                </div>
            </div>
      </form>
            </div>
    </div>
  </div>
</div>
@endsection