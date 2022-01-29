@extends('layout.app')

@section('content')
<!-- <div>
    <button type=" submit" class="float-right text-red-500 w-3/5  font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 ">Start A Discussion</button>
</div> -->
<div class="flex justify-center">
    <div class=" w-7/12 bg-gray p-4">
        <div class="flex justify-between p-3">
            <div>
                <p class=" mt-1">
                </p>
            </div>
            <div class="">
                <a class=" text-red-500  font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2" type="submit" href="{{route('addDiscussion')}}">Start A Discussion</a>
            </div>
        </div>
        @if($posts->count())
        @foreach($posts as $post)

        <div class="mb-4 p-4 bg-white shadow-lg">
            <div class="mb-3">
                <a href="" class="font-medium mb-4">{{$post->title}}</a> <span class="text-gray-400 text-sm ml-6 italic">{{$post->user->name}}</span>
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
            </div>


        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>There are no posts</p>
        @endif

    </div>
</div>

@endsection