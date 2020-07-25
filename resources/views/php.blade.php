@extends('layout')

@section('content')
    <p> PHP Page </p>
    @foreach($data as $value)
    	<li>{{$value}}</li>
    @endforeach

@endsection