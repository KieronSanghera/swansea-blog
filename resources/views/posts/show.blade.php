@extends('layouts.app')

@section('title')

@section('content')
    <figure class="m-16 flex-none bg-white rounded-3xl p-8 md:p-0">
        <div class="m-10 p-5 float-right">
            @if (Auth::user()->id == $admin->user_id)
            <form method='POST' 
                action='{{ route('posts.destroy', ['id' => $post->id]) }}'>
                @csrf
                @method('DELETE')
                <button class="bg-blue-400 hover:bg-blue-700 hover:text-white py-2 px-4 rounded-full -mb-5">Delete Post</button>
            </form>
            @endif
        </div>
        <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
            <h1 class="text-3xl my-6">{{ $post->title }}</h1>
            <p>{{ $post->body }}</p>
            <p class="text-blue-700 text-right">created by: {{ $post->admin->name }}</p>
        </div>
    </figure>

    @if ($students->contains('user_id', Auth::user()->id))
        <button class="flex mx-auto md:justify-center text-justify text-right -mt-10 w-9/12 bg-blue-400 hover:bg-blue-700 hover:text-white py-2 px-4 rounded-full"
        href='{{ route('comments.create', ['id' => $post->id]) }}'>
            Leave a comment on this post!</button>
    @endif

    <div id="root">
        <p v-if="comments.length < 1">no comments</p>

        <h1 class="text-xl pl-24">Comments</h1>
        <template v-for="comment in comments">
            <figure class="mx-10 mt-2 flex-none bg-white rounded-3xl p-1">
                <div class="pl-10">
                    <ul class="p-4 text-center md:text-left py-10">
                        
                        <li class="float-left w-4/6">@{{ comment.body }}</li>
                        <li class="text-blue-700 w-2/6 md:text-right float-right">commented by:@{{ comment.name}}</li>
                        @if (Auth::user()->id == $students->where('id', 2)->first()->user_id)
                            <form method='POST'
                                action='{{ route('comments.destroy') }}'>
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="comment_id" v-bind:value=comment.id >
                                <button class="float-right bg-blue-200 mr-2 -mt-14 hover:bg-blue-400 hover:text-white py-2 px-4 rounded-full text-xs">remove</button>
                            </form>
                        @endif
                    </ul>
                </div>
            </figure>
        </template>
    </div>

    {{-- @if ($comments->isNotEmpty())

    <figure class="divide-y-2 m-10 flex-none bg-white rounded-3xl p-1">
        @foreach ($comments as $comment)
        <div>
            @if (Auth::user()->id == $comment->student->user_id)
            <form method='POST'
                    action='{{ route('comments.destroy', ['id' => $comment->id]) }}'>
                    @csrf
                    @method('DELETE')
                    <button class="float-right bg-blue-200 mr-2 -mt-8 hover:bg-blue-400 hover:text-white py-2 px-4 rounded-full text-xs">remove</button>
            </form>
            <button class="float-right bg-blue-200 mr-24 -mt-8 hover:bg-blue-400 hover:text-white py-2 px-4 rounded-full text-xs">edit</button>
            @endif
            <div class="p-8 text-center md:text-left m-10">
                <p class="float-left w-4/6">{{ $comment->body }}</p>
                <p class="text-blue-700 w-2/6 md:text-right float-right">commented by: <br>{{ $comment->student->name }}</p>
            </div>


        </div>
        @endforeach
    </figure>
    @endif --}}


    <script>
        var app = new Vue({
            el:"#root",
            data: {
                comments: [],
            },
            mounted() {
                axios.get("{{ route ('api.comments.index', ['id' => $post->id] ) }}")
                .then( response => {
                    this.comments = response.data;
                })
                .catch(response => {
                    consonle.log(response);
                })
            },
        });
    </script>

@endsection
