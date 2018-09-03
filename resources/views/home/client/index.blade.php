@extends('home.layout.index')

<!--  在占位符 中填充内容 -->
@section('content')

<p class="lead">{{ $client->ctitle}}</p><br>

<p>{{ $client->cinfo }}</p>

@endsection