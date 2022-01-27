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

        <div class="mb-4 p-4 flex bg-white">
            <button type="submit" class="float-right text-red-500 w-full font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 ">Start A Discussion</button>
        </div>

        <div class="mb-4 p-4 flex bg-white">
            <button type="submit" class="float-right text-red-500 w-full font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2 ">Start A Discussion</button>
        </div>
    </div>
</div>

@endsection