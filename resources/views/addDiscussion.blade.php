@extends('layout.app')

@section('content')
<div class="flex justify-center">
    @if (session('success'))
    <div class="bg-green-500 p-4 w-7/12 rounded-lg mb-6 text-black text-center opacity-70">
        {{session('success')}}
    </div>
    @endif
</div>
<div class="flex justify-center">

    <div class="w-7/12 bg-white p-4 mt-4">

        <form action="" method="post">
            @csrf
            <div class="mb-4 space-y-0.5">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" placeholder="" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('title') border-red-500 @enderror">

                @error('title')
                <div class="text-red-500 text-sm mt-2">
                    {{$message}}
                </div>

                @enderror
            </div>

            <div class="mb-4 space-y-0.5">
                <label for="body" class="sr-only"></label>
                <textarea name="body" id="body" cols="30" rows="4" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('body') border-red-500 @enderror" placeholder=""></textarea>

                @error('body')
                <div class="text-red-500 mt-2 text-sm">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div>
                <button type="submit" class="float-right text-red-500 w-5/12 font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">Submit</button>
            </div>


        </form>



    </div>

</div>

@endsection