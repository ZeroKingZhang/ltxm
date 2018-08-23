@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
										<h3 class="name">{{ Session::get('adminuser') }}</h3>
										<span class="online-status status-available">在线</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												45 <span>Projects</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">个人详情</h4>
										<ul class="list-unstyled list-justify">
											<li>手机 <span>(124) 823409234</span></li>
											<li>邮箱 <span>samuel@mydomain.com</span></li>
										</ul>
									</div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
								<h4 class="heading"></h4>
								<!-- AWARDS -->
								<div class="awards">
									<div class="panel-heading">
									<h3 class="panel-title">欢迎您</h3>
									<p class="panel-subtitle">尊敬的管理员 {{ Session::get('adminuser') }}</p>
								</div>
									
								</div>
								<!-- END AWARDS -->
								<!-- TABBED CONTENT -->

								<!-- END TABBED CONTENT -->
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
@endsection