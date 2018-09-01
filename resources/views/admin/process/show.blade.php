@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">反馈详情</h3>
	</div>
	<form action="/admin/process" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="panel-body" style="width:500px;height:600px;margin:0px auto;">
			<label>反馈人联系方式：</label>
			<input type="text"  class="form-control" name="phone" value="{{ $data -> phone }}" placeholder="{{ $data -> phone }}" style="width:400px">
			<br>
			<label>反馈详细信息：</label><br>
			<div name="content" id="" cols="30" rows="10" style="width:400px;border:1px solid grey;">{!! $data -> content !!}</div>
		</div>
	</form>
</div>
@endsection