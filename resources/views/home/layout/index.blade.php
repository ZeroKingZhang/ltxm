<!DOCTYPE html>
<html>
<head>
<title>义工旅行</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="/layui/css/layui.css" media="all">
<link rel="stylesheet" href="css/all-df86af5803_2.css">
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<link rel="stylesheet" href="css/global-min.css">
    <script src="js/kissy-min.js"></script>
    <script src="js/global-min.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/2016-10-20style-min.css"/>
        <script src="js/package-config.js"></script>
        <script type="text/javascript">
        FB.config({
            name: 'index',
            path: '//g.alicdn.com/tb/bbs/1.2.0/pie',
            version: '1.0',
            charset: 'gbk',
            pub: '20121114',
            tag: '20120304'            });
    </script>
    <script>rain = {};rain.tag = "20141204";</script>
    <script src="js/lib.min.js"></script>
    <script src="js/laputa-min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/laputa.css"> 
      <script src="js/all-17476e6cc3.js"></script>
        <script type="text/javascript">
            Hifone.Config = {
                'locale' : 'zh-CN',
                'current_user_id' : 25,
                'token' : 'wX0v5iEs9NbIfx8IJ45zS8nWSZPQbnoRWe5QoFvu',
                'emoj_cdn' : 'http://localhost',
                'uploader_url' : 'https://www.010hub.com/upload_image',
                'notification_url' : 'https://www.010hub.com/notification/count'
            };
        </script>
        <script type="text/javascript">
            Hifone.jsLang = {
                'delete_form_title' : 'Confirm your Action',
                'delete_form_text' : 'Are you sure you want to do this?',
                'uploading_file' : 'Uploading file...',
                'loading' : 'Loading...',
                'content_is_empty' : 'Content is empty',
                'operation_success' : '操作成功!',
                'error_occurred' : 'An error occurred',
                'button_yes' : 'Yes',
                'like' : '赞',
                'dislike' : '踩'
            };
        </script>
</head>
<body>
    <!-- banner -->
    <div class="banner">
        <div class="header">
            <div class="container">
                <div class="header-left">
                    <div class="w3layouts-logo">
                       <a href="/"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="header-right">
                    <div class="w3-header-top">
                        <ul>
                            <li><i class="fa " aria-hidden="true"></i> <a href="/login">登录</a></li>
                            <li> <a href="/register">注册</a></li>
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
                                        <li><a href="about.html">版块</a></li>
                                        <li><a href="/home/charts">排行榜</a></li>                            
                                        <li><a href="gallery.html">Gallery</a></li>
                                        <li><a href="/myinfo">我的信息</a></li>
                                    </ul>   
                                    <div class="clearfix"> </div>
                                </div>  
                            </nav>      
                        </div>
                        <div class="agileinfo-social-grids">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                            </ul>
                        </div>
                     <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
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
            <div class="agile-footer-grids">
                <div class="col-md-4 agile-footer-grid">
                    <h4>History of Us</h4>
                    <p>Pellentesque urna ex, ultricies a nunc at, pretium maximus nisi. Vestibulum non auctor diam. Mauris eget consectetur mauris. <span>Aenean leo elit, accumsan vel elit vitae, mattis ultricies lacus. Cras consectetur justo lorem, sed dictum sapien eleifend at.</span></p>
                </div>
                <div class="col-md-4 agile-footer-grid">
                    <h4>Twitter Posts</h4>
                    <ul class="w3agile_footer_grid_list">
                        <li>Ut aut reiciendis voluptatibus maiores <a href="#">http://example.com</a> alias, ut aut reiciendis.
                            <span><i class="fa fa-twitter" aria-hidden="true"></i> 02 days ago</span></li>
                        <li>Itaque earum rerum hic tenetur a sapiente delectus <a href="#">http://mail.com</a> ut aut
                            voluptatibus.<span><i class="fa fa-twitter" aria-hidden="true"></i> 03 days ago</span></li>
                    </ul>
                </div>
                <div class="col-md-2 agile-footer-grid">
                    <h4>Events</h4>
                    <ul>
                        <li>12th Aug <a href="single.html">Curabitur</a></li>
                        <li>10th Sept <a href="single.html">Fusce urna</a></li>
                        <li>24th Sept <a href="single.html">Praesent</a></li>
                        <li>17th Oct <a href="single.html">Malesuada </a></li>
                        <li>09th Dec <a href="single.html">Cum sociis</a></li>
                    </ul>
                </div>
                <div class="col-md-2 agile-footer-grid">
                    <h4>Navigation</h4>
                    <ul>
                        <li class="text"><a href="index.html">Home</a></li>
                        <li class="text"><a href="about.html">About</a></li>
                        <li class="text"><a href="icons.html">Icons</a></li>
                        <li class="text"><a href="typography.html">Typography</a></li>
                        <li class="text"><a href="gallery.html">Gallery</a></li>
                        <li class="text"><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- copyright -->
    <div class="agileits-w3layouts-copyright">
        <div class="container">
            <p>© 2017 Njoy Travels. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
        </div>
    </div>
    <!-- //copyright -->
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/SmoothScroll.min.js"></script>
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
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
    <script src="js/jarallax.js"></script>
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