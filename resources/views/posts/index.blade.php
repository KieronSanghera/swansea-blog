@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Feed</h1>
    <p> The posts of Swansea Blog:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href='{{ route('posts.show', ['id'=>$post->id]) }}'>{{$post->title}}</a></li>
        @endforeach
    </ul>
    <a href='{{ route('posts.create') }}'>Create Post</a>

@endsection
