@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 内容开始 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">用户添加</h3>
	</div>
	<form action="/admin/user" method="POST">
		
		@if (count($errors) > 0                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       )
	    <div class="alert alert-danger alert-dismissible">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		{{ csrf_field() }}
		<div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
			<label>用户名：</label>
			<input type="text"  class="form-control" name="admin_user_name" value="{{ old('admin_user_name') }}" placeholder="请输入用户名" style="width:400px">
			<br>
			<label>密  &nbsp; &nbsp; 码：</label>
			<input type="password" class="form-control" name="admin_user_password" value="" style="width:400px">
			<br>
			<label>确认密码：</label>
			<input type="password" class="form-control" name="repassword" value="" style="width:400px">
			<br>
			<label>邮  &nbsp; &nbsp; 箱：</label>
			<input type="text"  class="form-control" name="admin_user_email" value="{{ old('admin_user_email') }}" placeholder="请输入邮箱" style="width:400px">
			<br>
			<label>手机号：</label>
			<input type="text"  class="form-control" name="admin_user_phone" value="{{ old('admin_user_phone') }}" placeholder="请填写手机号" style="width:400px">
			<br>
			<label>权限：</label>
			<select class="form-control" style="width:200px" name="admin_user_status">
				<option value="0">超级管理</option>
				<option value="1">普通管理</option>
				<option value="2">普通用户</option>		
			</select>
			<br>
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
<!-- 内容结束 -->
@endsection