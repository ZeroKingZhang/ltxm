@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">链接详情</h3>
	</div>
	<form action="/admin/process" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
			<label>链接名称：</label>
			<input type="text"  class="form-control" name="phone" value="{{ $data -> phone }}" placeholder="{{ $data -> ctitle }}" style="width:400px">
			<br>
			<label>链接内容：</label><br>
			<textarea name="cinfo" id="" rows="10" style="width:400px;">{{ $data -> cinfo }}</textarea>
		</div>
	</form>
</div>
@endsection