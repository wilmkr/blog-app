@extends('layouts.app')

@section('content')
	@if($post)
		<a href="/posts" class="btn btn-outline-secondary">Go Back</a>
		<h1>{{$post->title}}</h1>
		<small>Written on {{$post->created_at}}</small>
		<hr>
		<div>
			{{$post->body}}
		</div>
	@else
		<p>Oops! Post not found.</p>
	@endif
@endsection