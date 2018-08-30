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

      <div class="panel-body ">
        <ul class="nav nav-tabs" role="tablist">
          <li  class="active" ><a href="">个人信息</a></li>
          <li ><a href="/user/pic/{{$user->uid}}">头像</a></li>
          <li ><a href="/user/password/{{$user->uid}}">密码</a></li>
        </ul>
            <form action="/user/{{ $user->uid }}" method="post" accept-charset="UTF-8">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
          <label>用户名：</label>
          <div class="form-group">
            <input class="form-control" placeholder="{{ $user->uname }}" or ""  name="nickname" type="text" readonly>
          </div>
          <div class="form-group">
            <label>性别：</label>
            <select name="sex" class="form-control">
                <option value="1" @if( $user -> sex == '1') selected  @endif>男</option>
                <option value="2" @if( $user -> sex == '2') selected  @endif>女</option>
            </select>
          </div>
          <label>手机：</label>
          <div class="form-group">
            <input class="form-control" @if( $user->phone ) value="{{ $user->phone }}" @else value="" @endif  name="phone" type="text">
          </div>
          <label>个性签名：</label>
          <div class="form-group">
            <textarea class="form-control" rows="3" placeholder="{{ $user->signature }}" or ""  name="signature" cols="50"></textarea>
          </div>
          <div class="form-group status-post-submit">
            <input class="btn btn-primary" id="user-edit-submit" type="submit" value="确定修改">
          </div>
        </form>
            </div>
    </div>
  </div>


</div>
@endsection