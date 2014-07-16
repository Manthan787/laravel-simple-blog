@extends('layouts.main')
@section('title')
{{ $post->title }}
@stop

@section('content')
	<div class="container">
	<div class="panel panel-primary">
		<div class="panel-heading"> {{ $post->title }}</div>
		<div class="panel-body">{{ $post->body }}</div>
	</div>
	</div>
@stop