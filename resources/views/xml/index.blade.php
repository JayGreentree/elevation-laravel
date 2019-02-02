@extends('layout')

@section('title', $title)

@section('content')

	<h1>Request XML</h1>

	@if (count($sermon->all()) == 0)
		<form action="/getxml" method="POST">
			@csrf
			<button type="submit" class="btn btn-outline-danger">REQUEST NOW</button>
		</form>
	@else
		<p>You are all set, the database is already populated. Thank you!</p>
	@endif

@endsection