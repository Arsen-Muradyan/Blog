@extends('layouts.app')
@php
    $page = 'dashboard';
@endphp
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
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <br><br>
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <td class="text-center">Title</td>
                            <td></td>
                            <td></td>
                        </tr>
                        @foreach ($posts as $post)
                        <tr class="text-center">
                            <td class="pt-3 text-center">{{$post->title}}</td>
                            <td>
                                <a href="posts/{{$post->id}}/edit" class="btn btn-link">Edit</a>
                            </td>
                            <td>
                            {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=>'post']) !!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-link text-danger', 'onclick' => "return confirm('Are you sure?')"])}}
                            {!! Form::close() !!}
                            </td>
                        </tr>

                        @endforeach 
                    </table>
                    @else 
                        <p>You don't have posts.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
