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

    <div class="col-md-9 left-col">

      
      <div class="panel panel-default">
          <div class="panel-body">
            <ul class="nav nav-tabs" role="tablist">
              <li >
                <a  href="/user/{{$user->uid}}">个人信息</a>
              </li>
              <li class="">
                <a href="/user/invitation/{{$user->uid}}" >帖子</a>
              </li>
              <li class="active">
                <a href="" >回复</a>
              </li>
            </ul>

    @foreach($note as $k=>$v)
      <ul class="list-group">
     <li class="list-group-item">
          <a href="/note/{{$v->invitation_id}}" title="{{$v->invitation->ititle}}" class="remove-padding-left">
          {{$v->invitation->ititle}}
      </a>
      <span class="meta">
         at <span class="timeago" title="{{$v->created_at}}">{{$v->created_at}}</span>
      </span>
      <div class="reply-body markdown-reply content-body">
     {!!$v->content!!}
      </div>
    </li>
    </ul>
    @endforeach
        <div class="pull-right add-padding-vertically">
        {!! $note -> appends($request) -> render() !!}
        </div>
      
    </div>

  </div>
</div>
</div>

@endsection