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
												<th>帖子ID</th>
												<th>帖子标题</th>
												<th>帖子状态</th>
												<th>发布人</th>
												<th>发布时间</th>
												<th>最后回帖时间</th>
												<th>操作</th>
											</tr>
										</thead>
										@foreach($data as $k=>$v)
										<tbody>
											
											<tr>
												<td>{{$v->invitation_id}}</td>		
												<td>{{$v->ititle}}</td>		
												<td>@if ($v->istatus == 1)
														精品
													@elseif	($v->istatus ==2)
														置顶
													@elseif ($v->istatus ==3)
														禁用
													@endif

												</td>		
												<td>{{$v->uid}}</td>		
												<td>{{$v->updated_at}}</td>		
												<td>{{$v->created_at}}</td>		
												<td>
													<a href="#" class="btn btn-info">加精</a>
													<a href="#" class="btn btn-success">置顶</a >
													<form action="/admin/invitation/{{$v->invitation_id}}" method="POST" style=" display:inline;">
													{{ csrf_field() }}
													{{ method_field('DELETE') }}
													<input type="submit" value="删除" class="btn btn-danger" >
													</form>
												</td>		
											</tr>										
										</tbody>
										@endforeach
									</table>
								</div>
							</div>
@endsection