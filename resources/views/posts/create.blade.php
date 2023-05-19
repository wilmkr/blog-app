@extends('layouts.app')

@section('content')
	<h1>Create Post</h1>
	<form method="POST" action="/posts">
	    @csrf
	    <div class="mb-3">
		 	<label>Title</label>
		 	<input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
		 	@error('title')@include('includes.form_field_warning')@enderror
		</div>
		<div class="mb-3">
		 	<label>Body</label>
		 	<textarea name="body" rows="6" class="form-control @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
		 	@error('body')@include('includes.form_field_warning')@enderror
		</div>

		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection