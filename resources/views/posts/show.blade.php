@extends('layouts.app')

@section('title')

@section('content')
    <figure class="m-10 flex-none bg-white rounded-3xl p-8 md:p-0">
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <h1 class="text-3xl my-6">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p class="text-blue-700 text-right" >created by: {{ $post->admin->name }}</p>
        </div>
    </figure>
    <button method='DELETE' href='{{ route('posts.destroy') }}''>Delete Post</button>

@endsection
