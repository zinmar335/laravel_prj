@extends('layout')

@section('content')
	<h3> {{$receipe->name}} </h3>
	@if(isset($message))
	<div class="alert alert-success alert-dismissible" role="alert">
	  <span type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></span>
	  {{$message}}
	</div>
    @endif
	<li>Ingredients = {{$receipe->ingredients}}</li>
	<li>Category = {{$receipe->categories->name}}</li>
	<a class="btn btn-success" href="/receipe/{{$receipe->id}}/edit">Edit</a>

	<form action="/receipe/{{$receipe->id}}" method="post">
		{{method_field("DELETE")}}
		{{csrf_field()}}
		<br>
		<button type="submit" class="btn btn-primary">DELETE</button>
	</form>

@endsection
