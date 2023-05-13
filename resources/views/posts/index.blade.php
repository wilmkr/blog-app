@extends('layouts.app')

@section('content')
	<h1>Posts</h1>
	@if($posts)
		@foreach($posts as $post)
			<div class="card p-3 m-3">
				<h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
				<small>Written on {{$post->created_at}}</small>
			</div>
		@endforeach

		{{ $posts->links() }}
	@else
		<p>No posts found.</p>
	@endif
@endsection