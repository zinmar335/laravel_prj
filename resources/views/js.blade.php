@extends('layout')

@section('content')
    <p> JS Page </p>
    @foreach($data as $value)
    	<li>{{$value}}</li>
    @endforeach

@endsection