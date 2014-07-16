@extends('layouts.main')
@section('title')
Access Your Draft
@stop

@section('content')
<div class="jumbotron">
  <h1>Draft huh?</h1>
  <p>Only You can see your draft. Click on the button below. </p>
  <p><a href="/posts/{{ $slug }}">Access Draft</a></p>
</div>

@stop