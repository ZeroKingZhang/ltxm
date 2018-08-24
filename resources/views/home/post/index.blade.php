
@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 配置文件 -->

   <link href="summernote/summernote.css" rel="stylesheet">
    <!-- 编辑器源码文件 -->
  <script src="summernote/summernote.js"></script>
  <script src="summernote/summernote-zh-CN.js"></script>
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">发帖</h3>
	</div>
	<form action="/admin/announcement" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="panel-body" >
			<label>帖子标题：</label>
			<input type="text"  class="form-control" name="announcement_title" value="" placeholder="请输入公告标题" style="width:600px">
			<br>
			<br>
			<label>帖子内容：</label>

			 <!-- 实例化编辑器 -->
		     <div id="summernote"><p>Hello Summernote</p></div>
			  <script>
			    $(document).ready(function() {
			        $('#summernote').summernote({
                          height: 300,                 // set editor height
						  // minHeight: null,             // set minimum height of editor
						  // maxHeight: null,             // set maximum height of editor
						  // focus: true ,
						  lang: 'zh-CN' 
			        	});
			    });
			  </script>
			<br>
			<input type="submit" value="提交" class="btn btn-success">
			<input type="reset" value="重置" class="btn btn-info">
		</div>
	</form>
</div>

@endsection
