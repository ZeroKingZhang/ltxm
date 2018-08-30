@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')

<div id="main" class="main-container container">
                        
                   
  <div class="users-show">
  
  <div class="col-md-3 box">
  <div class="panel panel-default" style="width:230px;float:left;">
    <div style="text-align: center;">
    <img src="/images/avatar.jpg" class="img-thumbnail users-show-avatar upload-btn" style="width: 195px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
</div>

<dl class="dl-horizontal">
  <dt style="display:block;width:240px;height:30px;border-top:1px dashed #eee;margin-top:10px;line-height:30px;"><p style="float:left;margin-left:10px;"><font class="color:#ccc;">用户名</font>:<font class="font-weight:bold;">{{ $user->uname }}</font></p></label></dt><dd style="text-align:center;"></dd>
  <dt style="width:240px;height:30px;line-height:30px;border-top:1px dashed #eee;">
    <p style="float:left;margin-left:10px;">注册时间:{{ $user->created_at }}</p>
  </dt>
  </dl>
</div>
</p>
</dt>
</div>

<div class="col-md-9 left-col">
    <div class="panel-body" style="float:right;margin-top:-325px;">
          <ul class="nav nav-tabs" role="tablist" >
   <li class="active">
    <a href="/myinfo" >个人信息</a>
  </li>
  <li class="">
    <a href="/myinfo/show/{ $user->id }" >修改密码</a>
  </li>
  <li class="">
    <a href="https://www.010hub.com/user/25/threads" >话题</a>
  </li>
  <li class="">
    <a href="https://www.010hub.com/user/25/replies" >回复</a>
  </li>
  <li class="">
    <a href="https://www.010hub.com/user/25/favorites" >收藏</a>
  </li>
</ul>
	<h5><i class="fa fa-wrench"></i>&nbsp;&nbsp;个人信息设置</h5><hr>
     <form action="/myinfo/{{ $user->id }}" method="post" accept-charset="UTF-8">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
          <label>用户名：</label>
          <div class="form-group">
            <input class="form-control" placeholder="{{ $user->uname }}" or ""  name="nickname" type="text" readonly>
          </div>
          <div class="form-group">
            <label>性别：</label>
            <select name="sex" class="form-control">
            	<option value=""></option>
                <option value="0" @if( $user -> sex == '0') selected  @endif>男</option>
                <option value="1" @if( $user -> sex == '1') selected  @endif>女</option>
            </select>
          </div>
          <label>邮箱：</label>
          <div class="form-group">
            <input class="form-control" placeholder="{{ $user->email }}" or ""  name="email" type="text">
          </div>
          <label>地址：</label>
          <div class="form-group">
            <input class="form-control" placeholder="{{ $user->address }}" or ""  name="address" type="text">
          </div>
          <label>手机：</label>
          <div class="form-group">
            <input class="form-control" placeholder="{{ $user->phone }}" or ""  name="phone" type="text">
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

@endsection