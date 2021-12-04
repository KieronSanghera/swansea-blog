@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Feed</h1>
    <p> The posts of Swansea Blog:</p>
    <ul>
        @foreach ($posts as $post)
            <li><a href='/posts/{{$post->id}}'>{{$post->title}}</a></li>
        @endforeach
    </ul>

@endsection
