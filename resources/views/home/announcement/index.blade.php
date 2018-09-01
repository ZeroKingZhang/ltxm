@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')

<p class="lead">{{ $announcements->announcement_title}}</p><br>
发布时间
<p>{{$announcements->created_at }}</p><br>
<p>{!! $announcements->announcement_text !!}</p>

@endsection