@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">友情链接添加</h3>
	</div>
	<form action="/blogroll" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		@if (count($errors) > 0                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       )
	    <div class="alert alert-danger alert-dismissible">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
		@endif
		<div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
			<label>友情链接名称：</label>
			<input type="text"  class="form-control" name="blogroll_name" value="{{$data->blogroll_name}}" placeholder="请输入友情链接名称" style="width:400px">
			<br>
			<label>友情链接域名：</label>
			<input type="text"  class="form-control" name="blogroll_dns" value="{{$data->blogroll_dns}}" placeholder="请输入友情链接域名" style="width:400px">
			<br>
			
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
@endsection