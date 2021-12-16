@extends('layouts.app')

@section('title')

@section('content')
    <h1 class="text-5xl my-6 pl-6">Create Post</h1>

    <form method='POST' action='{{ route('posts.store') }}' enctype="multipart/form-data">
        @csrf
        <input type='hidden' name="admin_id" value="{{ Auth::user()->id }}">
        <p>Post title: <input type='text' name='title' value="{{ old('title') }}"></p>
        <p>Post body: <input type='text' name='body' value="{{ old('body') }}"></p>
        <input type="file" name="file">
        <input type='submit' value='Submit'>
        <a href='{{ route('posts.index') }}'>Cancel</a>
    </form>

@endsection
