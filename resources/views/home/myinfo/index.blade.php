@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<div class="users-show" style="display:inline-block;">

  <div class="col-md-3 box">
    <div style="text-align: center;">
    <img src="picture/avatar_1.jpg" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
</div>

<dl class="dl-horizontal">

  <dt><lable>&nbsp; </lable></dt><dd style="text-align:center;"> ID 25</dd>

  <dt><label>用户名:</label></dt><dd><strong>hello</strong></dd> 
  <dt><label>注册:</label></dt>
  <dd><span>2018-08-23 15:54:05</span></dd>
  </dl>
<div class="clearfix"></div>
      <a class="btn btn-primary btn-block" href="https://www.010hub.com/user/25/edit" id="user-edit-button">
      <i class="fa fa-edit"></i> 个人设置
    </a>
      
    </div>

  <div class="col-md-9 left-col">

    
    <div class="panel panel-default" style="display:inline-block;">
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
                  <a class="avatar" href="https://www.010hub.com/u/hello" target="_blank"><img src="picture/avatar_1.jpg"><strong><span>@hello</span></strong></a>
                                  </div>
                <ul class="status">
                  <li><a href="https://www.010hub.com/user/25/threads"><strong>0</strong>话题</a></li>
                  <li><a href="https://www.010hub.com/user/25/replies"><strong>0</strong>回复</a></li>
                  <li><a href="#"><strong>0</strong>粉丝</a></li>
                </ul>
        </div>
    </div>
  </div>
</div>
</div>

                <!-- 统计 -->

<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?2c0b9e6ee8d7787395c16b4612e8e2c0";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(["setDomains", ["*.www.010hub.com","*.www.010hub.com"]]);
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//pk.phpyiqiwan.com/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="picture/piwik.php" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
		</div>

    <div class="container">
@endsection