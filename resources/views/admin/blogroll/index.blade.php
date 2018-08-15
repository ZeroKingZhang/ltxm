@extends('admin.layout.index')


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
									<h3 class="panel-title">友情链接管理</h3>
								</div>
<form action="/admin/bolgroll">
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
												<th>友情链接ID</th>
												<th>友情链接名称</th>
												<th>友情链接域名</th>
												<th>创建时间</th>
												<th>最后修改时间</th>
												<th>操作</th>
											</tr>
										</thead>
										@foreach($data as $k=>$v)
										<tbody>
											
											<tr>
												<td>{{$v->blogroll_id}}</td>		
												<td>{{$v->blogroll_name}}</td>			
												<td>{{$v->blogroll_dns}}</td>			
												<td>{{$v->created_at}}</td>		
												<td>{{$v->updated_at}}</td>		
												<td>
													<a href="/admin/blogroll/{{$v->blogroll_id}}/edit" class="btn btn-warning">修改</a>
													<form action="/admin/blogroll/{{$v->blogroll_id}}" method="POST" style=" display:inline;">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}
													<input type="submit" value="删除" class="btn btn-info" >
													</form>
												</td>		
											</tr>										
										</tbody>
										@endforeach
									</table>
									{!! $data ->appends($request)->render() !!}
								</div>
								
							

@endsection