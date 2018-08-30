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
    <a href="/myinfo/{{ $user->id }}" >修改密码</a>
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
<h5><i class="fa fa-wrench"></i>&nbsp;&nbsp;头像设置</h5><hr>
    <form class="form-horizontal" method="post" action="/myinfo/{{ $user->id }}" enctype="multipart/form-data" id="avatar-form">
      {{ csrf_field() }}
      { method_field('PUT') }}
      <input type="hidden" name="_token" value="wX0v5iEs9NbIfx8IJ45zS8nWSZPQbnoRWe5QoFvu">
      <div class="form-group">
                    <div class="col-sm-4 avatar-setting-container">
                       <img src="@if(!empty($user -> pic)) {{ $user -> pic }}
                        @else /images/avatar.jpg @endif" class="img-thumbnail users-show-avatar upload-btn"
                          id='show' alt="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 status-post-submit">
                    <span class="loading"></span>
                    <input type="file" id="pic" name="pic" onchange="c()">
                    <span class="help-block">
                        头像支持jpg和png格式，上传的文件大小不超过 2M</span>
                    <button type="submit" class="btn btn-primary" id="avatarinput-submit">更换头像</button>
                    <input type="reset" id="editCancel" class="btn btn-primary" value="重新选择">
                    </div>
                </div>
        </form>
    <script type="text/javascript">
      function c(){
      var r= new FileReader();
      f=document.getElementById('file').files[0];
      r.readAsDataURL(f);
      r.onload=function(e){
      document.getElementById('show').src=this.result;
      };
      }
    </script>
  </div>
  </div>
@endsection