@extends('layout')

@section('content')
	<h3> Edit Receipe </h3>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="/receipe/{{$receipe->id}}" method="post">
		{{method_field("PATCH")}}
		{{csrf_field()}}
		<div class="form-group">
			<label for="exampleInputEmail1">Receipe Name</label>
			<input type="text" name="name" class="form-control" value="{{$receipe->name}}" required>
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Ingredients</label>
			<input type="text" name="ingredients" class="form-control" value="{{$receipe->ingredients}}" required>
		</div>
		<div class="form-group">
		    <label class="control-label" for="category">Category</label>
			<select id="category" name="category" class="form-control">
			@foreach($category as $cat)
				<option value="{{$cat->id}}" {{ $receipe->category == $cat->id ? "selected" : ''}}>{{$cat->name}}</option>
			@endforeach
			</select>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
