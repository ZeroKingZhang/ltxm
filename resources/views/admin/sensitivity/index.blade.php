@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">敏感词管理</h3>
	</div>
	<form action="/admin/sensitivity">
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
									<table class="table">
										<thead>
											<tr>
												<th>敏感词ID</th>
												<th>敏感词名称</th>
												<th>敏感词状态</th>
												
												<th>操作</th>
											</tr>
										</thead>
										@foreach($data as $k=>$v)
										<tbody>
											
											<tr>
												<td>{{$v->sensitivity_id}}</td>		
												<td>{{$v->badword}}</td>
												<td>@if ($v->status == 0)
														启用
													@elseif ($v->status == 1)
														禁用
													@endif
												</td>		
													
												<td>
													<a href="/admin/sensitivity/{{$v->sensitivity_id}}" class="btn btn-danger">禁用</a>
													<a href="/admin/sensitivity/show1/{{$v->sensitivity_id}}" class="btn btn-success">启用</a>
													
													<form action="/sensitivity/{{$v->sensitivity_id}}" method="POST" style=" display:inline;">
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