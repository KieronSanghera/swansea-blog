@extends('layouts.app')

@section('title')
    Post
@endsection

@section('content')
@if ($postTitle)
    <h1>{{ $postTitle ?? '' }} Post</h1>
    <p>This is the first post page</p>
@else
    <h1>No Post</h1>
@endif

@endsection
