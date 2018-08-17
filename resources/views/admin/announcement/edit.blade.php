@extends('admin.layout.index')


@section('content')
	<!-- 配置文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
    
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">公告添加</h3>
	</div>
	<form action="/admin/announcement" method="POST" enctype="multipart/form-data">
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
			<label>公告标题：</label>
			<input type="text"  class="form-control" name="announcement_title" value="{{$data->announcement_title}}" placeholder="请输入公告标题" style="width:400px">
			<br>
			<label>公告状态：</label>
			<select class="form-control" style="width:200px" name="announcement_status">
				<option value="0" @if($data->announcement_status == 0 ) selected @endif>启用</option>
				<option value="1" @if($data->announcement_status == 1 ) selected @endif>禁用</option>		
			</select>
			<br>
			<label>公告内容：</label>
				<!-- 加载编辑器的容器 -->
	    <script id="container" name="content" type="text/plain">
	    	{!! $data->announcement_text !!}
	    </script>
			 <!-- 实例化编辑器 -->
		    <script type="text/javascript">
		        var ue = UE.getEditor('container',{toolbars:
		        	[
   			 	[ 'undo','forecolor','emotion','attachment','backcolor','bold','italic', 'imagecenter','simpleupload','insertimage']
					]
			});
		    </script>

			<br>
			
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>
@endsection