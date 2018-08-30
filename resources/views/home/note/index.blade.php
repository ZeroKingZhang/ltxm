@extends('home.layout.index')


@section('content')
<link rel="stylesheet" href="/css/all.css" type="text/css" />
<!-- 配置文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/utf8-php/ueditor.all.js"></script>
<div id="main" class="main-container container"> 
   <div class="row max-width"> 
    <div class="col-xs-12"> 
     <ol class="breadcrumb">
      <li><a href="/forum">{{ $pforums[0]->forum_name}}</a></li>
      <li><a href="/list/{{ $forums[0]->forum_id}}">{{ $forums[0]->forum_name}}</a></li>
      <li><a>{{ $invitation[0]->ititle}}</a></li>
    </ol>
    </div> 
   </div> 
   <div class="col-md-9 threads-show main-col"> 
    <!-- Thread Detial --> 
    <div class="thread panel panel-default"> 
     <div class="infos panel-heading"> 
      <div class="pull-right avatar"> 
       <a href="/user/{{ $user[0]->uid}}">
         @if($invitation[0]->user->pic)
        <img src="{{ $invitation[0]->user->pic}}" class="media-object img-thumbnail avatar-64" style="width:48px;height:48px;"/>
         @else
        <img src="/images/avatar.jpg" class="media-object img-thumbnail avatar-64" style="width:48px;height:48px;" />
         @endif
         </a> 
      </div> 
      <h1 class="panel-title thread-title">{{ $invitation[0]->ititle}}</h1> 
      <div class="meta inline-block"> 
       <a href="/user/{{ $user[0]->uid}}"> {{ $user[0]->uname}} </a> 发表于 
       <abbr class="timeago">{{ $invitation[0]->created_at}}</abbr>
      </div> 
      <div class="clearfix"></div> 
     </div> 
     <div class="panel-body content-body"> 
      <div class="markdown-body" id="emojify"> 
      <!-- 内容开始 -->
      {!! $invitation[0]->content !!}
      </div> 
     </div> 
     <div class="panel-footer operate"> 
      <div class="pull-right"> 
       <a class="favoriteable"> <i class="fa fa-bookmark"></i> <span>收藏</span> </a> 
      </div> 
      <div class="clearfix"></div> 
     </div> 
     <div class="modal fade" id="exampleModal" tabindex="-1" role="" aria-labelledby="exampleModalLabel"> 
      <div class="modal-dialog"> 
       <div class="modal-content"> 
        <div class="modal-header"> 
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> 
         <h4 class="modal-title" id="exampleModalLabel">备注内容</h4> 
        </div> 
       </div> 
      </div> 
     </div> 
    </div> 
    <!-- Reply List --> 
    <!-- 回复情况 -->
    @if($note->count()==0)
    <div class="replies panel panel-default list-panel replies-index"> 
     <div class="panel-heading"> 
      <div class="total">
       回复总数: 
       <b>0</b> 
      </div> 
     </div> 
     <div class="panel-body"> 
      <div class="empty-block">
       暂无回复
      </div> 
      <!-- Pager --> 
      <div class="pull-right" style="padding-right:20px"> 
      </div> 
     </div> 
    </div> 
    @else
     <div class="panel-heading"> 
      <div class="total">
       回复总数: 
       <b>{{ $note->count() }}</b> 
      </div> 
     </div> 
    
     <div class="panel-body"> 
       @foreach($note as $k=>$v)
     <ul class="list-group row"> 
      <li class="list-group-item media " id="reply2"> 
       <div class="avatar pull-left"> 
        @if($v->user->pic)
        <a href="/user/{{$v->uid}}"> <img class="media-object img-thumbnail avatar" alt="{{$v->user->uname}}" src="{{$v->user->pic}}" style="width:48px;height:48px;" /> </a>
        @else
        <a href="/user/{{$v->uid}}"> <img class="media-object img-thumbnail avatar" alt="{{$v->user->uname}}" src="/images/avatar.jpg" style="width:48px;height:48px;" /> </a>
        @endif
       </div> 
       <div class="infos"> 
        <div class="media-heading meta"> 
         <a href="/user/{{$v->user->uid}}"> {{$v->user->uname}} </a> 
         <abbr class="timeago" title="2018-08-28 22:09:09">{{$v->created_at}}</abbr>
         <a name="reply1" class="anchor" href="#reply1" aria-hidden="true"></a> 
        </div> 
            <div class="media-body markdown-reply content-body"> 
             <p>{!!$v->content!!}</p> 
            </div> 
           </div> 
      </li> 
         </ul> 
        @endforeach 
        <!-- Pager --> 
       <div class="pull-right" style="padding-right:20px"> 
        {!! $note -> appends($request) -> render() !!}
       </div> 
      </div>
    @endif
    <!-- Reply Box -->
    @if(!$homeFlag) 
    <div class="panel panel-default">
    <div class="panel-heading">
    发表回复
    </div>
    <div class="panel-body">
      <div class="reply-box form">
          <div style="padding:20px;">
      需要 <a class="btn btn-success" href="/login">登录</a> 后方可回复, 如果你还没有账号请点击这里 <a class="btn btn-primary" href="/register">注册</a>。
    </div>
          </div>
    </div>
  </div>
    @else
    <div class="panel panel-default"> 
      <form action="/note" method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="uid" value="{{ $luser[0]->uid }}">
      <input type="hidden" name="invitation_id" value="{{ $invitation[0]->invitation_id }}">
      <label>回复：</label>
         <script id="container" name="content" type="text/plain" style="height: 300px">
            </script>
         <!-- 实例化编辑器 -->
          <script type="text/javascript">
              var ue = UE.getEditor('container',{toolbars:
                [
            [ 'undo','forecolor','emotion','attachment','backcolor','bold','italic', 'imagecenter','simpleupload','insertimage']
            ]
        });
          </script>
        <input type="submit" value="提交" class="btn btn-success">
        <input type="reset" value="重置" class="btn btn-info">
    </form>
  </div> 
  @endif
@endsection