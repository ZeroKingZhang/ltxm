@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 内容开始 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">用户修改</h3>
	</div>
	<form action="/admin/home/user/{{ $data->id }}" method="post">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		@if (count($errors) > 0)
	    <div class="alert alert-danger alert-dismissible">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		<div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
			<label>用户名：</label>
			<input type="text"  class="form-control" name="uname" value="{{ $data ->uname }}"  style="width:400px">
			<br>
			<label>密  &nbsp; &nbsp; 码：</label>
			<input type="password" class="form-control" name="upwd" value="" style="width:400px">
			<br>
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
<!-- 内容结束 -->
@endsection