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
										@foreach($flights as $k=>$v)
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
											<a href="/softdelete/restore/{{$v->invitation_id}}" class="btn btn-info">恢复</a>
											<a href="/softdelete/del/{{$v->invitation_id}}" class="btn btn-danger">删除</a>
												</td>		
											</tr>										
										</tbody>
										@endforeach
									</table>
								</div>
							</div>
@endsection