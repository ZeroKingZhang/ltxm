@extends('admin.layout.index')


@section('content')
<div class="panel">
	<div class="panel-heading">
		<h3 class="panel-title">轮播图管理</h3>
	</div>
	<div class="panel-body">
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>图片</th>
					<th>图片标题</th>
					<th>是否显示</th>
					<th>创建时间</th>
					<th>最后修改时间</th>
					<th>操作</th>
				</tr>
			</thead>
			@foreach($data as $k=>$v)
			<tbody>
				
				<tr>
					<td>{{$v->id}}</td>		
					<td>
						<img src="{{$v->carousel_pic}}" width="50">
					</td>
					<td>{{$v->carousel_title}}</td>
					<td>
					@if ( $v-> isshow == '0' )
					    否
					@elseif ( $v-> isshow == '1' )
					    是
					@endif
					</td> 
					<td>{{$v->created_at}}</td>		
					<td>{{$v->updated_at}}</td>		
					<td>
						<a href="/admin/carousel/{{$v->id}}/edit" class="btn btn-warning">修改</a>
						<form action="/admin/carousel/{{$v->id}}" method="POST" style=" display:inline;">
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