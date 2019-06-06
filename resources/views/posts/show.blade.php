@extends('layouts.app')
@section('content')
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>
    @if ($post->user_id == auth()->user()->id)  
    <a href="{{$post->id}}/edit" class="btn btn-default">Edit</a>
    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'post', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger mt-2', 'onclick' => "return confirm('Are you sure?')"])}}
    {!! Form::close() !!}
    @endif
   @if ($post->image !== null) 
   <img src="/storage/uploads/{{$post->image}}" alt="Post image" width="100%" class="mt-3">
   @endif
@endsection