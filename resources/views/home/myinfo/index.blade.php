@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
<div class="users-show">
    <div class="col-md-3 box">
      <div style="text-align: center;">
      <img src="/images/avatar.jpg" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
  </div>

  <dl class="dl-horizontal">

  <dt><lable>&nbsp; </lable></dt><dd> ID 25</dd>

  <dt><label>用户名:</label></dt><dd><strong>hello</strong></dd>
      <dt class="adr"><label> 公司:</label></dt><dd><span class="org">兄弟连</span></dd>
    <dt>
    <label>注册:</label>
  </dt>
  <dd><span>2018-08-23 15:54:05</span></dd>
      <dt><label>个性签名:</label></dt><dd><span>菜鸟慢慢飞，总会飞上天</span></dd>
  </dl>
  <div class="clearfix">
        <a class="btn btn-primary btn-block" href="https://www.010hub.com/user/25/edit" id="user-edit-button">
        <i class="fa fa-edit"></i> 个人设置
      </a>
       </div> 
      </div>

    <div class="col-md-9 left-col">

      
      <div class="panel panel-default">
          <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
    <li class="active">
      <a href="https://www.010hub.com/u/hello" >个人信息</a>
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
          
              <div class="user-card">
                  <div class="header">
                    <a class="avatar" href="https://www.010hub.com/u/hello" target="_blank"><img src="picture/avatar_2.jpg"><strong><span>@hello</span></strong></a>
                                    </div>
                  <ul class="status">
                    <li><a href="https://www.010hub.com/user/25/threads"><strong>1</strong>话题</a></li>
                    <li><a href="https://www.010hub.com/user/25/replies"><strong>1</strong>回复</a></li>
                    <li><a href="#"><strong>0</strong>粉丝</a></li>
                  </ul>
                  <div class="footer">
                  
                  </div>
          </div>
      </div>
    </div>
  </div>
</div>

@endsection