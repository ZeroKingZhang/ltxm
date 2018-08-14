@extends('admin.layout.index')


@section('content')
<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">帖子管理</h3>
								</div>
								<div class="panel-body">
									<table class="table">
										<thead>
											<tr>
												<th>版块ID</th>
												<th>版块图片</th>
												<th>版块名称</th>
												<th>版块状态</th>
												<th>创建时间</th>
												<th>最后修改时间</th>
												<th>操作</th>
											</tr>
										</thead>
										@foreach($data as $k=>$v)
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
												<td>{{$v->created_at}}</td>		
												<td>{{$v->updated_at}}</td>		
												<td>
													<a href="/forum/{{$v->forum_id}}" class="btn btn-danger">禁用</a>
													<a href="/forum/show1/{{$v->forum_id}}" class="btn btn-success">启用</a>
													<a href="/forum/{{$v->forum_id}}/edit" class="btn btn-warning">修改</a>
													<form action="/forum/{{$v->forum_id}}" method="POST" style=" display:inline;">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}
													<input type="submit" value="删除" class="btn btn-info" >
													</form>
												</td>		
											</tr>										
										</tbody>
										@endforeach
									</table>
								</div>
							</div>
@endsection