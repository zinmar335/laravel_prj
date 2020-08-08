@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3> Home Page </h3>
                    @if(session("message"))
                    <div class="alert alert-success" role="alert">{{session("message")}}</div>
                    @endif
                    <a href="/receipe/create" class="btn btn-success">Add Receipe</a>
                    @foreach($data as $value)
                        <a href="/receipe/{{$value->id}}"><li>{{$value->name}}</li></a>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
