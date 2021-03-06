@extends('layout.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white p-6 rounded-lg">
        <div>
            @if($posts->count())
            @foreach($posts as $post)
            <div class="mb-4 p-4 bg-white shadow-lg">
                <div class="mb-3">
                    <a href="{{route('posts.show', $post)}}" class="font-medium mb-4">{{$post->title}}</a>
                </div>

                <p class="font-light mb-3 text-gray-600">{{$post->body}}</p>
                <div class="flex items-center">

                    <p <i class="far fa-clock"></i></p><span class="text-xs ml-1 mr-8 text-gray-600">{{$post->created_at->diffForHumans()}}</span>
                    <form action="{{route('posts.likes',$post->id)}}" method="post">
                        @csrf
                        <button type="submit"><i class="far fa-heart "></i></button>
                        <span class="text-sm text-gray-600 ml-1">{{$post->likes->count()}}</span>
                    </form>

                    <a href="" class="ml-10"><i class="far fa-comment"></i></a>
                    <span class="text-sm text-gray-600 ml-1">{{$post->comments->count()}}</span>
                    <form action="{{route('post.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="ml-10"><i class="fas fa-dumpster"></i></button>
                    </form>
                </div>


            </div>
            @endforeach
            @endif
        </div>
    </div>

    @endsection