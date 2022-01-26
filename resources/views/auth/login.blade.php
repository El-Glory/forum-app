@extends('layout.app')


@section('content')
<div class="flex justify-center mt-10">
    <div class="5/12 bg-white p-4">
        @if (session('status'))
        <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
            {{session('status')}}
        </div>

        @endif
        <form action="" method="POST">
            @csrf
            <div class="mb-4 space-y-0.5">
                <label for="email">Email Address</label>
                <input type="text" name="email" placeholder="Email Address" id="email" class="bg-gray-100 border-black w-full p-3 rounded-md border @error('email') border-red-500 @enderror" value="{{old('email')}}">

                @error('email')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4 space-y-0.5">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="password" id="password" class="bg-gray-100 border-black w-full p-3 rounded-md border @error('password') border-red-500 @enderror" value="{{old('password')}}">

                @error('password')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex items-center">
                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                    <label for="remember">Remember me</label>
                </div>
            </div>

            <div>
                <button type="submit" class="text-red-500 w-full font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection