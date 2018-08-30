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
  @if($homeUserInfo==$user->uname )
  <div class="clearfix"></div>
      <a class="btn btn-primary btn-block" href="/user/{{$user->uid}}/edit" id="user-edit-button">
      <i class="fa fa-edit"></i> 个人设置
    </a>
    @else
    @endif
  </div>
  
    <div class="col-md-9 left-col">

      
      <div class="panel panel-default">
          <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
    <li class="active">
      <a  >个人信息</a>
    </li>
    <li class="">
      <a href="/user/invitation/{{$user->uid}}" >帖子</a>
    </li>
    <li class="">
      <a href="/user/note/{{$user->uid}}" >回复</a>
    </li>
  </ul>
          
<dl class="dl-horizontal">

  <dt><lable>ID :</lable></dt><dd>{{$user->uid}}</dd>

  <dt><label>用户名:</label></dt><dd><strong>{{$user->uname}}</strong></dd>
    <dt><label>注册:</label></dt><dd><span>{{$user->created_at}}</span></dd>
    <dt><label>性别:</label></dt><dd><span>
      @if($user->sex && $user->sex==1)
      男
      @elseif($user->sex==2)
      女
      @else
      该用户没有设置
      @endif
    </span></dd>
      <dt><label>手机号:</label></dt><dd><span>
         @if( $user->phone )
           {{$user->phone}}
          @else
          该用户没有设置
          @endif
      </span></dd>
      <dt><label>个性签名:</label></dt><dd><span>{{$user->signature}}</span></dd>
  </dl>
  </div>
    </div>
  </div>
</div>

@endsection