@extends('home.layout.index')


@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
<a href="/post/{{$data[0]->forum->forum_id}}"><button type="button" class="btn btn-primary btn-lg">发帖</button></a>
<div class="panel panel-default">
        <div class="panel-heading">
        <div class="pull-left hidden-sm hidden-xs">
                    <div class="node-info">
            <strong>{{ $data[0]->forum->forum_name }}</strong>
            <span class="total">共有 {{ $data->count() }}个讨论主题</span>
                      </div>
                    </div>
                      <ul class="pull-right list-inline remove-margin-bottom thread-filter">
                      	<li>
                          <i class="fa fa-eye"></i>发布人
            					    </li>
            					    <li>
            					       <i class="fa fa-eye"></i>  回复数量
            					    </li>
                     </ul>
                    <div class="clearfix"></div>
        </div>

        
   <div class="panel-body remove-padding-horizontal">
       <ul class="list-group row thread-list">
       	@foreach($data as $k=>$v)
         <li class="list-group-item media " style="margin-top: 0px;">
        <a class="pull-right" href="/note/{{ $v->invitation_id }}" >
            <span class="badge badge-reply-count" style="color:#333;background-color: #ccc;"> {{$v->note->count()}}  </span>
        </a>
        <a class="pull-right" href="/note/{{ $v->invitation_id }}" >
            <span > {{$v->user->uname}}</span>
        </a>

        <div class="infos">

          <div class="media-heading">

            
            <a href="/note/{{ $v->invitation_id }}" title="{{ $v->ititle }}">
                {{ $v->ititle }}
            </a>
            
          </div>
          
          <div class="media-body meta">
               发帖时间 &nbsp; &nbsp;&nbsp;<span class="timeago " data-toggle="tooltip" data-placement="top" title="{{$v->created_at}}">{{ $v->created_at }}</span>
          </div>

        </div>
        @endforeach
      </li>
    </ul>
    <div class="pull-right" style="padding-right:20px"> 
        {!! $data -> appends($request) -> render() !!}
  </div> 
</div>
@endsection