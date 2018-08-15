@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">版块添加</h3>
	</div>
	<form action="/admin/sensitivity" method="POST" enctype="multipart/form-data">
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
			<label>敏感词名称：</label>
			<input type="text"  class="form-control" name="badword" value="" placeholder="请输入版块名称" style="width:400px">
			<br>
			
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
@endsection