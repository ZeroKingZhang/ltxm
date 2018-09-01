<!DOCTYPE html>
<html>
<head>
<title>义工旅行</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="/css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="/layui/css/layui.css" media="all">
<!-- //font-awesome icons -->
<!-- font -->
<link rel="stylesheet" id="css_extstyle" type="text/css" href="/css/style.css" />
<!-- //font -->
<script src="/js/jquery.js"></script>
<script src="/layer/src/layer.js"></script>
<script src="/js/bootstrap.js"></script>
<link rel="stylesheet" href="/css/global-min.css">
    <script src="/js/kissy-min.js"></script>
    <link rel="stylesheet" href="/css/nav.css" />
    <link rel="stylesheet" href="/css/2016-10-20style-min.css"/>
        <script src="/js/package-config.js"></script>
    <script src="/js/lib.min.js"></script>
    <script src="/js/laputa-min.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/laputa.css"> 
</head>
<body>
    <!-- banner -->
     <div class="banner">
        <div class="header">
            <div class="container">
                <div class="header-left">
                    <div class="w3layouts-logo">
                       <a href="/"><img src="/images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="w3-header-top">
                        <ul>
                            @if(  Session::get('homeUserInfo') ) 
                            <li><i class="fa " aria-hidden="true"> {{ Session::get('homeUserInfo') }}</li>
                            &nbsp; &nbsp; &nbsp;
                            <li><a href="/logout" name="logout">退出</a></li>                         
                            <li><a href="/user/{{ $login_user->uid }}">我的信息</a></li>                         
                            @else
                            <li><i class="fa " aria-hidden="true"></i> <a href="/login">登录</a></li>
                            <li><a href="/register">注册</a></li>                          
                            @endif                       
                            
                        </ul>
                    </p>
                    </div>
                    <div class="w3-header-bottom">
                        <div class="top-nav">
                            <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a class="active" href="/">首页</a></li>
                                        <li><a href="/forum">版块</a></li>
                                        <li><a href="/charts">排行榜</a></li>                            
                                        <li><a href="/process">意见与反馈</ a></li>
                                    </ul>   
                                    <div class="clearfix"> </div>
                                </div>  
                            </nav>      
                        </div>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li>分享到:</li>
                                <li><a href="#"><i class="layui-icon layui-icon-login-wechat"></i></a></li>
                                <li><a href="#"><i class="layui-icon layui-icon-login-qq"></i></a></li>
                                <li><a href="#"><i class="layui-icon layui-icon-login-weibo"></i></a></li>
                            </ul>
                        </div>
                     <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        @if( session('success') )
        <script>
        layer.alert("{{ Session('success') }}", {
          skin: 'layui-layer-lan' 
          ,closeBtn: 0
        });
        </script>
        @endif
        
        @if( session('error') )
        <script>
        layer.alert("{{ Session('error') }}", {
          skin: 'layui-layer-molv' 
          ,closeBtn: 0
        });
        </script>
        @endif

        <div class="w3layouts-banner-slider">
            <div class="container">
               <!-- 内容开始 -->
                  @section('content')
                  

                  @show
               <!-- 内容结束 -->
            </div>
        </div>
    </div>
    <!-- //banner -->
   
    <!-- //newsletter -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <h5>友情链接</h5>
        <span class="layui-breadcrumb" style="visibility: initial;">
          @foreach( $blogroll as $k => $v )
          <a href="http://{{ $v->blogroll_dns }}">{{ $v->blogroll_name }}</a>
          <a>&nbsp; &nbsp; </a>
          <a>&nbsp; &nbsp; </a>
          @endforeach
        </span>
        </div>
    </div>
    <!-- //footer -->
    <!-- copyright -->
    <div class="agileits-w3layouts-copyright">
        <div class="container">
            <p>义工论坛<a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!-- //copyright -->
    <script src="/js/responsiveslides.min.js"></script>
    <script src="/js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="/js/move-top.js"></script>
    <script type="text/javascript" src="/js/easing.js"></script>
    <!-- here stars scrolling icon -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
                var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
                };
            */
                                
            $().UItoTop({ easingType: 'easeOutQuart' });
                                
            });
    </script>
    <!-- //here ends scrolling icon -->
    <script src="/js/jarallax.js"></script>
    <script type="text/javascript">
            /* init Jarallax */
            $('.jarallax').jarallax({
                speed: 0.5,
                imgWidth: 1366,
                imgHeight: 768
            })
    </script>
</body> 
</html>