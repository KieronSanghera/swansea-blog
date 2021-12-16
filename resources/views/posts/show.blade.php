@extends('layouts.app')

@section('title')

@section('content')
    <figure class="m-16 flex-none bg-white rounded-3xl p-8 md:p-0">
        <div class="p-5 float-right">
            <button class="bg-blue-400 hover:bg-blue-900 hover:text-white font-bold py-2 px-4 rounded-full" method='DELETE' href='{{ route('posts.destroy') }}''>Delete Post</button>
        </div>
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <h1 class="text-3xl my-6">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p class="text-blue-700 text-right">created by: {{ $post->admin->name }}</p>
        </div>
    </figure>

    <figure class="divide-y-2 m-10 flex-none bg-white rounded-3xl">
    @foreach ($comments as $comment)
    
        <div class="p-8 text-center md:text-left m-10">
                <p class="float-left w-4/6">{{ $comment->body }}</p>
                <p class="text-blue-700 w-2/6 md:text-right float-right">commented by: <br>{{ $comment->student->name }}</p>
        </div>
    
    @endforeach
    </figure>

@endsection
