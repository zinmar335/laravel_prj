@extends('layout')

@section('content')
	<h3> Add New Receipe </h3>

	@if ($errors->any())
	    <div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif

	<form action="/receipe" method="post">
	  {{csrf_field()}}
	  <div class="form-group">
	    <label for="exampleInputEmail1">Receipe Name</label>
	    <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
	  </div>
	  <div class="form-group">
	    <label for="exampleInputPassword1">Ingredients</label>
	    <input type="text" name="ingredients" class="form-control" value="{{old('ingredients')}}" required>
	  </div>
	  <!-- <div class="form-group">
	    <label for="exampleInputPassword1">Category</label>
	    <input type="text" name="category" class="form-control" value="{{old('category')}}" required>
	  </div> -->
		<div class="form-group">
		    <label class="control-label" for="category">Category</label>
	      	<select id="category" name="category" class="form-control">
		      	@foreach($category as $cat)
		        <option value="{{$cat->id}}">{{$cat->name}}</option>
		        @endforeach
		    </select>
		</div>

	  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
@endsection
