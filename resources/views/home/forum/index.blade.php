@extends('home.layout.index')

@section('content')
@foreach($common_cates_data as $k=>$v)
<div class="site-title">
      <fieldset><legend><a name="card">{{$v->forum_name}}</a></legend></fieldset>
    </div>
<div style="padding: 20px; background-color: #F2F2F2;">
      <div class="layui-row layui-col-space15">
      @foreach($v['sub'] as $kk=>$vv)
        <div class="layui-col-md6">
          <div class="layui-card">
            <div class="layui-card-header">  <a href="/list/{{$vv->forum_id}}"> {{$vv->forum_name}}</a></div>
            <div class="layui-card-body">
              {{$v->forum_info}} <br> {{$vv->forum_info}}
            </div>
          </div>
        </div>
      @endforeach
      </div>
    </div>
 @endforeach

@endsection