@extends('layouts.app')

@section('title')

@section('content')
    <h1 class="text-5xl my-6 pl-6">Create Post</h1>
    <figure class="m-16 flex-none bg-white rounded-3xl p-8 md:p-0">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <form method='POST' action='{{ route('comments.store') }}' enctype="multipart/form-data">
                @csrf
                <input type='hidden' name="commenter_id" value="{{ Auth::user()->id }}">
                <input type='hidden' name='post_id' value="{{$post->id}}">
                <p>comment body: <input type='text' name='body' value="{{ old('body') }}"></p>
                <input type='submit' value='Submit'>
                <a href='{{ route('posts.index') }}'>Cancel</a>
            </form>
        </div>
    </figure>

@endsection