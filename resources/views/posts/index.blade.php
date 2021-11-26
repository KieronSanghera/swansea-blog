@extends('layouts.app')

@section('title')
    Posts
@endsection

@section('content')
    <h1>Feed</h1>
    <p> The posts of Swansea Blog:</p>
    <ul>
        @foreach ($posts as $post)
            <li>{{$post->title}}</li>
        @endforeach
    </ul>

@endsection
