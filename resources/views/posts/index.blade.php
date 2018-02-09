@extends('layout.app');
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Post</h1>
                <a href="/posts/create" class="btn btn-primary" role="button">Create a Post</a>
            </div>
        </div>
    </div>
    
<hr>
    @if(count($posts)>=1)
        @foreach($posts as $post)
            <div class="well well-sm">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
            </div>
        @endforeach
        {{$posts->links()}}

    @else
            <p>No Post Found</p>
    @endif
@endsection