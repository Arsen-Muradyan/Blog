@extends('layouts.app')
@section('content')
<h2>Posts</h2>
@if (count($posts) > 0)
@foreach ($posts as $post)
    <div class="card p-3 mt-2" style="width: 100%;">
        <div class="row">
            
                @if ($post->image !== null)
                <div class="col-4">
                    <img src="/storage/uploads/{{$post->image}}" alt="Post Image" width="100%">
                </div>
                @endif
            
            <div class="col-8">
                <div class="card-body">
                    <h2 class="card-title">
                        <a href="posts/{{$post->id}}">{{$post->title}}</a>
                    </h2>
                <p class="card-text text-secondary">{{$post->body}} created at {{$post->created_at}} Created {{$post->user->name}}</p>
                    </div>
            </div>
        </div>
    </div>
@endforeach
@else
<p>No Post found</p>
@endif
@endsection