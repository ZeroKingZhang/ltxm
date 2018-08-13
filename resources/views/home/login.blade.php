<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>注册</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/demo.css" />
  <link rel="stylesheet" href="css/templatemo-style.css">  
  <script type="text/javascript" src="js/modernizr.custom.86080.js"></script>	
</head>
<body>

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
                     <form action="/register" method="post" class="subscribe-form" id="form">
                    	{{ csrf_field() }}
               	    	<div class="row form-section">
							<div class="form-group col-md-7 col-sm-7 col-xs-7"">
						    <input type="text" class="form-control" name="uname" placeholder="请输入登录账号"><span></span>
						</div>
						<div class="form-group col-md-7 col-sm-7 col-xs-7"">
						    <input type="password" class="form-control" name="upwd" placeholder="请输入密码"><span></span>
						</div>
						<div class="form-group col-md-7 col-sm-7 col-xs-7"">
						    <input type="email" class="form-control" name="email" placeholder="请输入验证码"><span><img src="1" alt=""></span>
						</div>
							<div class="col-md-5 col-sm-5">
								<button type="submit" class="tm-btn-subscribe">登录</button>
							</div>
						</div>
                    </form>
                   
					<div class="tm-social-icons-container text-xs-center">
	                    <a href="#" class="tm-social-link"><i class="fa fa-facebook"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-google-plus"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-twitter"></i></a>
	                    <a href="#" class="tm-social-link"><i class="fa fa-linkedin"></i></a>
	                    <a href="/register"  class="tm-btn-subscribe" >注册</a>
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