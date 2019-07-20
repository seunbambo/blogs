@extends('layouts.app')

@section('content')
    <h1>Add Post</h1>
    {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
        </div>
        <div class="form-group">
                {{Form::label('article', 'Article')}}
                {{Form::textarea('article', '', ['class' => 'form-control', 'placeholder' => 'Article'])}}
        </div>
        
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection