@extends('layouts.app')
@section('content')
{!! Form::open(['action' => 'PostsController@store', 'method'=>'post', 'enctype' => 'multipart/form-data']) !!}
    {{Form::label('title')}}
    {{Form::text('title', '', ['class' => 'form-control'])}}
    {{Form::label('body')}}
    {{Form::textarea('body', '', ['class' => 'form-control', 'style' => 'resize:none'])}}
    <br>
    {{Form::label('image')}}
    {{Form::file('image')}}
    <br>
    {{Form::submit('Add Post', ['class' => 'btn btn-primary mt-2'])}}
{!! Form::close() !!}
@endsection