@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1> {{$title}} </h1>
        <p><a class="btn btn-primary" href="/posts" role="button">View our new posts</a></p>
        @if(Auth::guest())
            <p>Please, login or register to be able to create posts</p>
            <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
        @endif
    </div>
@endsection