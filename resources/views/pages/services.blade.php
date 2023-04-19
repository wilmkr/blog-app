@extends('layouts.app')

@section('content')
	<h1>{{$title}}</h1>
	@if($services)
		<ul>
		@foreach($services as $service)
			<li>{{$service}}</li>
		@endforeach
		</ul>
	@endif
@endsection
