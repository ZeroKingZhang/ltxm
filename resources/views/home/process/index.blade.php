@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">意见与反馈</h3>
	</div>
	<form action="/process" method="POST" enctype="multipart/form-data">
		@if( session('success') )
        <script>
        layer.alert("{{ Session('success') }}", {
          skin: 'layui-layer-lan' 
          ,closeBtn: 0
        });
        </script>
        @endif
        
        @if( session('error') )
        <script>
        layer.alert("{{ Session('error') }}", {
          skin: 'layui-layer-molv' 
          ,closeBtn: 0
        });
        </script>
        @endif


		{{ csrf_field() }}	
		<div class="panel-body" >
			<label>联系方式：</label>
			<input type="text"  class="form-control" name="phone" value="" placeholder="请输入联系方式" style="width:600px">
			<br>
			<br>
			<label>反馈详情：</label>
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