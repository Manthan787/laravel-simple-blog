@extends('layouts.main')
@section('title')
Home
@stop
@section('content')
	@foreach($posts as $post)
	<div class="container">
	<div class="list-group-item">
		<a href="posts/{{Str::slug($post->title)}}" class="list-group-item active"
	   
	   	<h2 class="list-group-item-heading">{{  $post->title }}</h2>
	   	<span class="badge">{{ $post->created_at->diffForHumans() }}</span>
		<p class="list-group-item-text">{{Str::limit($post->body,'100') }}</p>
			
	</a>
	</div>
	</div>
	@endforeach


@stop