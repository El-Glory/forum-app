@extends('layout.app')

@section('content')
<div class="flex justify-center">
    <div class="w-7/12 bg-gray p-4">


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
            </div>


        </div>

        @foreach($post->comments as $comment)
        <div class=" w-7/12 mb-4 p-4 bg-white shadow-lg rounded-lg">
            <div class="">
                <div class="mb-1">
                    <p href="{{route('posts.show', $post)}}" class="font-medium ">{{$comment->name}}</p>
                </div>
                <p class="ml-7 font-light">{{ $comment->body }}</p>
            </div>

        </div>
        @endforeach


        <div class="mb-4 p-14 bg-white shadow-lg">
            <form action="{{route('comment.add', $post)}}" method="post">
                @csrf
                @guest
                <div class="mb-4 space-y-0.5">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('name') border-red-500 @enderror">

                    @error('name')
                    <div class="text-red-500 text-sm mt-2">
                        {{$message}}
                    </div>

                    @enderror
                </div>
                @endguest


                <div class="mb-4 space-y-2.5">
                    <label for="body" class="sr-only"></label>
                    <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('body') border-red-500 @enderror" placeholder=""></textarea>

                    @error('body')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="float-right text-red-500 w-5/12 font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">Add Comment</button>
                </div>

            </form>
        </div>


    </div>
</div>
@endsection