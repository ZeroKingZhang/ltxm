
@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">发帖</h3>
	</div>
	<form action="/post" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<ol class="breadcrumb">
		  <li><a href="/forum">{{ $data2->forum_name }}</a></li>
		  <li><a href="/list/{{$data->forum_id}}">{{ $data->forum_name }}</a></li>
		  <li class="active">发帖</li>
		  <input type="hidden" name="forum_id" value="{{$data->forum_id}}">
		</ol>
		<div class="panel-body" >
			<label>帖子标题：</label>
			<input type="text"  class="form-control" name="title" value="" placeholder="请输入帖子标题" style="width:600px">
			<br>
			<br>
			<label>帖子内容：</label>
			 <script id="container" name="content" type="text/plain" style="height: 300px">
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