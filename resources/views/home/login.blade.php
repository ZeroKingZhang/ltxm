<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>登录</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>	
</head>
<body>
	<script src="/js/jquery.js"></script>
<script src="/layer/src/layer.js"></script>
          

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
			<div id="particles-js"></div>
		
			<ul class="cb-slideshow">
	            <li>s</li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	            <li></li>
	        </ul>
<div class="container-fluid">
				<div class="row cb-slideshow-text-container ">
					<div class= "tm-content col-xl-6 col-sm-8 col-xs-8 ml-auto section">
					<header class="mb-5"><h1>义工旅行</h1></header>
					<P class="mb-5">深入了解当地的文化，结交志同道合的朋友。</P>
                     <form action="/login" method="post" class="subscribe-form" id="form">
                    	{{ csrf_field() }}
               	    	<div class="row form-section">
							<div class="form-group col-md-7 col-sm-7 col-xs-7">
						    <input type="text" class="form-control" name="uname" placeholder="请输入登录账号"><span></span>
						</div>
						<div class="form-group col-md-7 col-sm-7 col-xs-7">
						    <input type="password" class="form-control" name="upwd" placeholder="请输入密码"><span></span>
						</div>
						<div class="form-group col-md-7 col-sm-7 col-xs-7">
						   {!! Geetest::render() !!}
						</div>
							<div class="form-group col-md-7 col-sm-7 col-xs-7">
								<button type="submit" class="tm-btn-subscribe">登录</button>
								<button class="tm-btn-subscribe"><a href="/register">注册</a></button>
								<button class="tm-btn-subscribe"><a href="/">返回首页</a></button>
							</div>
						</div>
                    </form>
					<div class="tm-social-icons-container text-xs-center">
	                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
	                </div>
					</div>
				</div>	
				<div class="footer-link">
					<p>Copyright © 2018 Your Company 
				</div>
			</div>	
</body>
	<script type="text/javascript" src="js/particles.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</html>
