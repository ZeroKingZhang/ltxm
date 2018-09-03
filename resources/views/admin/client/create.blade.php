@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 内容开始 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">用户添加</h3>
	</div>
	<form action="/admin/client" method="POST">
		
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
			<label>链接名称：</label>
			<input type="text"  class="form-control" name="ctitle" value="{{ old('ctitle') }}" style="width:400px">
			<br>
			<label>链接内容：</label>
			<br>
				<textarea name="cinfo" id="" cols="30" rows="10" style="width:400px;"></textarea>
			<br>
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
<!-- 内容结束 -->
@endsection