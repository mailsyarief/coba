@extends('layout.app');

@section('content')
<h1>{{$post->title}}</h1>
<div class="container">
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
<hr>
<div class="container">
    <img style="width:50%" src="/storage/cover_image/{{$post->cover_image}}"></img>
</div>
<hr>    
<div class="container">
    {!!$post->body!!}
</div>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id == $post->user_id)
        <div class="container">
            <a href="/posts" class="btn btn-danger btn-sm">Back</a>
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default btn-sm">Edit</a>
        </div>

        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger btn-sm'])}}
        {!!Form::close()!!}
    @endif
@endif
@endsection



