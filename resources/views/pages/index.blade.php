@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1>Bloggers</h1>
        <p>Free to express Yourself</p>
        @if(Auth::guest())
            <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
        @endif
    </div>
@endsection