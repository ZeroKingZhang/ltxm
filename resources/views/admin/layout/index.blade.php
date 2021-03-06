<!doctype html>
<html lang="en">

<head>
	<title>义工旅行管理</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/assets/css/main.css">
	<link rel="stylesheet" href="/assets/css/page.css">

	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/assets/img/favicon.png">
</head>

<body>
	<!-- 读取跳转信息 -->
@if( session('success') )
<div class="alert alert-success alert-dismissible" role="alert">
	{{ session('success') }}	
</div>
@endif


@if( session('error') )
<div class="alert alert-success alert-dismissible" role="alert">
	{{ session('error') }}	
</div>
@endif
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href=""><img src="/assets/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/assets/img/user.png" class="img-circle" alt="Avatar"> <span> {{ Session::get('adminuser') }} </span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="/admin"><i class="lnr lnr-user"></i> <span>后台首页</span></a></li>
								<li><a href="/admin/login/logout"><i class="lnr lnr-exit"></i> <span>退出登录</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>用户管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/user/create" class="">用户添加</a></li>
									<li><a href="/admin/user" class="">用户列表</a></li>
									<li><a href="/admin/userdelete/index" class="">回收站</a></li>								
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages0" data-toggle="collapse" class="collapsed"><i class="lnr lnr-user"></i> <span>前台用户</span>
							<i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages0" class="collapse ">
								<ul class="nav">
								<li><a href="/admin/home/user" class="">用户列表</a></li>
								</ul>
                            </div>
						</li>
						<li>
							<a href="#subPages1" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>帖子管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages1" class="collapse ">
								<ul class="nav">
									
									<li><a href="/admin/invitation" class="">帖子显示</a></li>
									<li><a href="/softdelete" class="">回收站</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages2" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>版块管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages2" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/forum/create" class="">版块添加</a></li>
									<li><a href="/admin/forum" class="">版块显示</a></li>
									<!-- <li><a href="/forumdelete" class="">回收站</a></li> -->
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages3" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>轮播图管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages3" class="collapse ">
								<ul class="nav">
									
									<li><a href="/admin/carousel" class="">轮播图显示</a></li>
									<li><a href="/admin/carousel/create" class="">轮播图上传</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages4" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>敏感词管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages4" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/sensitivity/create" class="">敏感词添加</a></li>
									<li><a href="/admin/sensitivity" class="">敏感词浏览</a></li>
									
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages5" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>友情链接管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages5" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/blogroll/create" class="">友情链接添加</a></li>
									<li><a href="/admin/blogroll" class="">友情链接浏览</a></li>	
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPages6" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>版权声明</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages6" class="collapse ">
								<ul class="nav">
									<li><a href="/clause" class="">使用条款</a></li>	
									<li><a href="/declaration" class="">法律、免责</a></li>	
									<li><a href="/copyright" class="">版权声明</a></li>	
								</ul>
							</div>
						</li>
					    <li>	
							<a href="#subPages7" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>公告管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages7" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/announcement/create" class="">公告添加</a></li>
									<li><a href="/admin/announcement" class="">公告浏览</a></li>	
								</ul>
							</div>
						</li>
						<li>	
							<a href="#subPages8" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>反馈管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages8" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/process" class="">反馈列表</a></li>
									<li><a href="/admin/processdelete" class="">已处理反馈</a></li>	
								</ul>
							</div>
						</li>
						<li>	
							<a href="#subPages9" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>链接管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages9" class="collapse ">
								<ul class="nav">
									<li><a href="/admin/client" class="">链接列表</a></li>
									<li><a href="/admin/client/create" class="">添加链接</a></li>	
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>	
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
@if( session('success') )
<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<i class="fa fa-check-circle"></i> {{ session('success') }}
</div>
@endif
@if( session('error') )
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    <i class="fa fa-times-circle"></i> {{ session('error') }}
</div>
@endif
			<!-- 内容开始 -->
			@section('content')

            @show
			<!-- 内容结束 -->

		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="/assets/vendor/jquery/jquery.min.js"></script>
	<script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/assets/scripts/klorofil-common.js"></script>
</body>

</html>
