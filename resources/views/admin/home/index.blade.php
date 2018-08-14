@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 内容开始 -->
<!-- 读取跳转信息 -->
@if( session('success') )
<div class="alert alert-success alert-dismissible" role="alert">
	{{ session('success') }}	
</div>
@endif

@if( session('error') )
<div class="alert alert-success alert-dismissible" role="alert">
	{{ session('error') }}	
</div>
@endif
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">前台用户列表</h3>
	</div>
	<form action="/adminuser">
	<div class="input-group" style="width:250px;float:left">
		<span class="input-group-addon">显示</span>
		<select class="form-control" name="count">
			<option value="10" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==10 ) selected @endif>10</option>
			<option value="5" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==5 )selected @endif>5</option>
			<option value="3" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==3 ) selected @endif>3</option>
		</select>
		<span class="input-group-addon">条/页</span>
		</div>
	<div class="input-group" style="width:250px;float:right">
		<input class="form-control" type="text" name="search" value="{{ old('search') or '' }}">
		<span class="input-group-btn"><button class="btn btn-primary" type="submit">搜索</button></span>
	</div>
	</form>
	<div class="panel-body">
		<table class="table table-bordered">
		<thead>
			<tr>
				<th>ID</th>
				<th>用户名</th>
				<th>邮箱</th>
				<th>手机号</th>
				<th>注册时间</th>
				<th>修改时间</th>
				<th>操作</th>
			</tr>									
		</thead>
		<tbody>
		 @foreach($data as $k => $v)
			<tr>
				<td>{{ $v->id }}</td>
				<td>{{ $v-> uname }}</td>
				<td>{{ $v-> email }}</td>
				<td>{{ $v-> home_user_detail->phone }}</td>
				<td>{{ $v-> created_at }}</td>
				<td>{{ $v-> updated_at }}</td>
				<td>
					<a href="" class="btn btn-info">修改</a>
					<form action="/adminuser/{{ $v->id }}" method="post" style="display:inline">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<input type="submit" value="删除" class="btn btn-danger">
					</form>
				</td>
			</tr>
		@endforeach
		<!-- {!! $data -> render() !!} -->
			</tbody>
		</table>
	</div>
	</div>
<!-- 内容结束 -->
@endsection