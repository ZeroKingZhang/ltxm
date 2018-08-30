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
    <p style="float:left;margin-left:10px;">注册时间:{{ $user->created_at }}}</p>
  </dt>
  </dl>
</div>
</p>
</dt>
</div>

<div class="col-md-9 left-col">
    <div class="panel-body" style="float:right;margin-top:-325px;">
          <ul class="nav nav-tabs" role="tablist" >
   <li class="">
    <a href="/myinfo" >个人信息</a>
  </li>
  <li class="active">
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
 <form class="form-horizontal" method="post" action="/settings/resetPassword" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="wX0v5iEs9NbIfx8IJ45zS8nWSZPQbnoRWe5QoFvu">
            <h5><i class="fa fa-wrench"></i>&nbsp;&nbsp;密码设置</h5><hr>
            <label>请输入当前密码：</label>
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="old_password" placeholder="请输入您当前的密码" class="form-control">
                </div>
            </div>
            <label>请输入新密码：</label>
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="password" placeholder="请输入新密码" class="form-control">
                </div>
            </div>
            <label>请再次输入新密码：</label>
            <div class="form-group">
                <div class="col-sm-4">
                <input type="password" name="password_confirmation" placeholder="请再次输入新密码" class="form-control">
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

@endsection