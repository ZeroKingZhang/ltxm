@extends('admin.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<!-- 内容开始 -->
<!-- 读取跳转信息 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">反馈列表</h3>
	</div>
	<form action="/admin/client">
	<div class="input-group" style="width:250px;float:left;margin-left: 25px;">
		<span class="input-group-addon">显示</span>
		<select class="form-control" name="count">
			<option value="3" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==3 ) selected @endif>3</option>
			<option value="5" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==5 )selected @endif>5</option>
			<option value="10" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==10 ) selected @endif>10</option>
		</select>
		<span class="input-group-addon">条/页</span>
	</div>
	<div class="input-group" style="width:250px;float:right;margin-right: 25px;">
		<input class="form-control" type="text" name="search" value="{{ $request['search'] or '' }}">
		<span class="input-group-btn"><button class="btn btn-primary" type="submit">搜索</button></span>
	</div>
	</form>
	<div style="clear:both;"></div>
	<div class="panel-body">
		<table class="table table-bordered"  style="text-align:center;">
		<thead>
			<tr white-space:nowrap;>
				<th style="text-align:center;">ID</th>
				<th style="text-align:center;">链接名称</th>
				<th style="text-align:center;">链接内容</th>
				<th style="text-align:center;">添加时间</th>
				<th style="text-align:center;">操作</th>
			</tr>									
		</thead>
		<tbody>
		 @foreach($data as $k => $v)
			<tr>
				<td>{{ $v-> client_id }}</td>
				<td>{{ $v-> ctitle }}</td>
				<td>{{ $v-> cinfo }}</td>
				<td>{{ $v-> created_at }}</td>
				<td  style="padding-left: 2px;padding: 3px;">
					<a href="/admin/client/{{$v->client_id}}/edit" class="btn btn-info">修改</a>
					<form action="/admin/client/{{ $v->client_id }}" method="post" style="display:inline-block;">
						{{ csrf_field() }}
						{{ method_field('GET') }}
						<input type="submit" value="查看详情" class="btn btn-warning" style="padding: 6px 13px;">
					</form>

					<form action="/admin/client/{{ $v->client_id }}" method="post" style="display:inline-block;">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
						<input type="submit" value="删除" class="btn btn-danger" style="padding: 6px 13px;">
					</form>					
				</td>
			</tr>
		@endforeach
			</tbody>
		</table>
	     <span style="width:300px;display:block;margin:0 auto;">
             {!! $data ->appends($request) -> render() !!}
		</span>
	</div>

<!-- 内容结束 -->
@endsection