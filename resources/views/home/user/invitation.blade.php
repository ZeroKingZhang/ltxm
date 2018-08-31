@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
<div class="users-show">

  <div class="col-md-3 box">
    <div style="text-align: center;">
      @if($user->pic)
    <img src="{{$user->pic}}" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
    @else
    <img src="/images/avatar.jpg" class="img-thumbnail users-show-avatar upload-btn" style="width: 206px;margin: 4px 4px 15px;min-height:190px;cursor: pointer;">
    @endif
   </div>
   @if($homeUserInfo==$user->uname )
  <div class="clearfix"></div>
      <a class="btn btn-primary btn-block" href="/user/{{$user->uid}}/edit" id="user-edit-button">
      <i class="fa fa-edit"></i> 个人设置
    </a>
    @else
    @endif
  </div>
</div>
  <div class="col-md-9 left-col">


  <div class="panel panel-default">


    <div class="panel-body">
      <ul class="nav nav-tabs" role="tablist">
  <li class="">
  	<a href="/user/{{$user->uid}}" >个人信息</a>
  </li>
  <li class="active">
    <a href="" >话题</a>
  </li>
  <li class="">
  	<a href="/user/note/{{$user->uid}}" >回复</a>
  </li>
</ul>
    @foreach($invitation as $k=>$v)
    <ul class="list-group">

     <li class="list-group-item" >

      <a href="/note/{{$v->invitation_id}}" title="{{$v->ititle}}">
        {{$v->ititle}}
      </a>
      &nbsp; &nbsp; &nbsp;
      <span class="meta">

        <a href="/list/{{$v->forum_id}}" title="{{$v->forum->forum_name}}">
          {{$v->forum->forum_name}}
        </a>
        <span>  &nbsp; &nbsp; </span>
         回复  {{$v->note->count()}}
        <span>  &nbsp; &nbsp; </span>
        <span class="timeago">{{$v->created_at}}</span>

      </span>

      </li>
      
    </ul>
     @endforeach
	    <div class="pull-right add-padding-vertically">
        {!! $invitation -> appends($request) -> render() !!}
        </div>
    </div>

  </div>
</div>

@endsection