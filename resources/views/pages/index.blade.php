@extends('layouts.app')

@section('content')
	<div class="container-fluid bg-light p-5 text-center">
		<h1 class="display-4">Welcome!</h1>
		<p class="lead">Hi there! Welcome to my Blog App.</p>
		<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
		<a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
	</div>
@endsection
