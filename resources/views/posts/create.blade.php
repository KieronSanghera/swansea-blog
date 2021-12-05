@extends('layouts.app')

@section('title')

@section('content')
    <h1>Create Post</h1>
    @csrf
    <form method='POST' action='{{ route('posts.store') }}'>
        <p>Post title: <input type='text' name='title'></p>
        <p>Post body: <input type='text' name='weight'></p>
        <input type='submit' value='Submit'>
        <a href='{{ route('posts.index') }}'>Cancel</a>

@endsection