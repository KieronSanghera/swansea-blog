@extends('layouts.app')

@section('title')

@endsection

@section('content')
    <div class="mx-20 ">
        <div class="grid grid-cols-2">
            <h1 class="text-5xl my-6 pl-6">First 5 Posts</h1>
            <div class="grid grid-cols-2 gap-4 p-6">
            @foreach($posts_first5 as $top )
            <a href='{{ route('posts.show', ['id' => $top->id]) }}'>
                <figure class="flex-none bg-white rounded-xl p-8 md:p-0 hover:bg-blue-50">
                    <div class="pt-6 md:p-8 text-center md:text-left space-y-4"
                        href='{{ route('posts.show', ['id' => $top->id]) }}'>
                        <figcaption>
                            <div class="text-xl underline text-gray-700">
                                {{ $top->title }}
                            </div>
                        </figcaption>
                        <blockquote>
                            <p class="text-l truncate font-medium">
                                {{ $top->body }}
                            </p>
                        </blockquote>
                        <figcaption class="font-medium">
                            <div class=" truncate text-blue-700">
                                Posted By: {{ $top->admin->name }}
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </a>
            @endforeach
            </div>
            <h1 class="text-5xl my-6 pl-6">Post Feed</h1>
            @if(Auth::user()->is_lecturer)
            <a class="justify-self-end self-center pr-6" href='{{ route('posts.create') }}'>
                <figure class="md:flex bg-blue-400 rounded-xl hover:bg-blue-900 hover:text-white">
                    <div class="p-3">
                        Create Post
                    </div>
                </figure>
            </a>
            @endif
        </div>
        <div class="grid grid-cols-2 gap-4 p-6">
            @foreach ($posts as $post)
                <a href='{{ route('posts.show', ['id' => $post->id]) }}'>
                    <figure class="flex-none bg-white rounded-xl p-8 md:p-0 hover:bg-blue-50">
                        <div class="pt-6 md:p-8 text-center md:text-left space-y-4"
                            href='{{ route('posts.show', ['id' => $post->id]) }}'>
                            <figcaption>
                                <div class="text-xl underline text-gray-700">
                                    {{ $post->title }}
                                </div>
                            </figcaption>
                            <blockquote>
                                <p class="text-l truncate font-medium">
                                    {{ $post->body }}
                                </p>
                            </blockquote>
                            <figcaption class="font-medium">
                                <div class=" truncate text-blue-700">
                                    Posted By: {{ $post->admin->name }}
                                </div>
                            </figcaption>
                        </div>
                    </figure>
            @endforeach
            </a>
        </div>
    @endsection
