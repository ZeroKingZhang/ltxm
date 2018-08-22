@extends('admin.layout.index')


@section('content')
<!-- 内容开始 -->
<!-- 读取跳转信息 -->
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">版块管理</h3>
	</div>
	<form action="/sensitivity">
	<div class="input-group" style="width:250px;float:left;margin-left: 25px;">
		<span class="input-group-addon">显示</span>
		<select class="form-control" name="count">
			<option value="10" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==10 ) selected @endif>10</option>
			<option value="5" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==5 )selected @endif>5</option>
			<option value="3" @if( !empty($request['count']) && isset($request['count']) &&  $request['count']==3 ) selected @endif>3</option>
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
												<th>版块ID</th>
												<th>版块图片</th>
												<th>版块名称</th>
												<th>版块状态</th>
												<th>删除时间</th>
												<th>操作</th>
											</tr>
										</thead>
										@foreach($deldata as $k=>$v)
										<tbody>
											
											<tr>
												<td>{{$v->forum_id}}</td>		
												<td>
													<img src="{{$v->forum_pic}}" width="50">
												</td>
												<td>{{$v->forum_name}}</td>		
												<td>@if ($v->forum_status == 0)
														启用
													@elseif ($v->forum_status == 1)
														禁用
													@endif
												</td>				
												<td>{{ $v->deleted_at }}</td>		
												<td  style="padding-left: 1px;padding: 1px;">
													<a href="/forumdelete/rollback/{{ $v -> forum_id }}" class="btn btn-warning" style="padding: 6px 10px;display:inline-block;">恢复</a>
													<a href="/forumdelete/destory/{{ $v -> forum_id }}" class="btn btn-danger" style="padding: 6px 10px;display:inline-block;">彻底删除</a>				
												</td>	
											</tr>										
										</tbody>
										@endforeach
									</table>
									{!! $deldata -> appends($request)->render() !!}
								</div>
								
							

@endsection