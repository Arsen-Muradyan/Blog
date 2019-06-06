@extends('layouts.app')
@section('content')
{!! Form::open(['action' => ['PostsController@update', $post->id], 'method'=>'post']) !!}
    {{Form::label('title')}}
    {{Form::text('title', $post->title, ['class' => 'form-control'])}}
    {{Form::label('body')}}
    {{Form::textarea('body', $post->body, ['class' => 'form-control', 'style' => 'resize:none'])}}
    <br>
    {{Form::label('Image')}}
    {{Form::file('image')}}
    <br>
    {{Form::submit('Update', ['class' => 'btn btn-primary mt-2'])}}
    {{Form::hidden('_method', 'PUT')}}
{!! Form::close() !!}
@endsection