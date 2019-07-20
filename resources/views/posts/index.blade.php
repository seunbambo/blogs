@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="card px-3 py-2 mb-2">
            <h3>{{$post->title}}</h3>
            <p>{{$post->article}}</p>
            <div class="text-secondary"><small>Created on {{$post->created_at}} by {{$post->user->name}}</small></div>
            </div>
            
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found</p>
    @endif
@endsection