@extends('layout')

@section('content')
	<h3> Home Page </h3>
	<a href="/receipe/create" class="btn btn-success">Add Receipe</a>
	@foreach($data as $value)
		<a href="/receipe/{{$value->id}}"><li>Name = {{$value->name}}</li></a>
		<li>Ingredients = {{$value->ingredients}}</li>
		<li>Category = {{$value->category}}</li>
		<hr>
	@endforeach
@endsection
