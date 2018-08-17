@extends('admin.layout.index')


@section('content')
<!-- 内容开始 -->
<!-- 读取跳转信息 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">友情链接管理</h3>
	</div>
	<form action="/admin/announcement">
		<div class="input-group" style="width:250px;float:left;margin-left: 25px;">
			<span class="input-group-addon">显示</span>
			<select class="form-control" name="count">
				<option value="10" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==10 ) selected @endif >10</option>
				<option value="5" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==5 )selected @endif >5</option>
				<option value="3" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==3 ) selected @endif >3</option>
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
		 	<table class="table">
		 		<thead>
		 			<tr>
		 				<th>公告ID</th>
		 				<th>公告标题</th>
		 				<th>发布人</th>
		 				<th>公告状态</th>
		 				<th>创建时间</th>
		 				<th>最后修改时间</th>
		 				<th>操作</th>
		 			</tr>
		 		</thead>
		 		@foreach($data as $k=>$v)
		 		<tbody>
		 			
		 			<tr>
		 				<td>{{$v->announcement_id}}</td>		
		 				<td>{{$v->announcement_title}}</td>			
		 				<td>{{$v->admin_user_id}}</td>
		 				<td>@if ($v->announcement_status == 0)
										启用
							@elseif ($v->announcement_status == 1)
										禁用
							@endif
												</td>				
		 				<td>{{$v->created_at}}</td>		
		 				<td>{{$v->updated_at}}</td>		
		 				<td>
		 					<a href="/admin/announcement/{{$v->announcement_id}}/edit" class="btn btn-info">修改</a>
		 					<a href="/admin/announcement/disabled/{{$v->announcement_id}}" class="btn btn-warning">禁用</a>
		 					<a href="/admin/announcement/start/{{$v->announcement_id}}" class="btn btn-success">启用</a>
		 					<form action="/admin/announcement/{{$v->announcement_id}}" method="POST" style=" display:inline;">
		 					{{ csrf_field() }}
		 					{{ method_field('DELETE') }}
		 					<input type="submit" value="删除" class="btn btn-danger" >
		 					</form>
		 				</td>		
		 			</tr>										
		 		</tbody>
		 		@endforeach
		 	</table>
		 	{!! $data ->appends($request)->render() !!}
		 </div>
@endsection