@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">轮播图添加</h3>
	</div>
	<form action="/admin/carousel" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
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
			<label>上传图片：</label>
			<input type="file" name="carousel_pic" value= "" style="width:400px">
			   
			<br>
			<label>图片标题：</label>
			<input type="text" class="form-control" name="carousel_title" value="" style="width:400px">
			<br>
			<label>是否显示：</label>
			是<input type="radio" name="isshow" value="1"> 否<input type="radio" name="isshow" value="0"><br>
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
@endsection