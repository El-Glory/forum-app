@extends('layout.app')


@section('content')
<div class="flex justify-center mt-10">
    <div class="6/12 bg-white p-4">
        <form action="" method="post">
            @csrf
            <div class="mb-4 space-y-0.5">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Enter your name" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('name') border-red-500 @enderror">

                @error('name')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>

                @enderror
            </div>

            <div class="mb-4 space-y-0.5">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Enter your email" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('email') border-red-500 @enderror">

                @error('email')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>

                @enderror
            </div>


            <div class="mb-4 space-y-0.5">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password" class="bg-gray-100 border-black w-full p-3 rounded-sm border @error('password') border-red-500 @enderror" value="">

                @error('password')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>

                @enderror
            </div>

            <div class="mb-4 space-y-0.5">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password" placeholder="Confirm password" class="bg-gray-100 border-black w-full p-4 rounded-sm border @error('password_confirmation') border-red-500 @enderror" value="">

                @error('password_confirmation')
                <div class="text-red-500 text-sm mt-2 text-center">
                    {{$message}}
                </div>

                @enderror
            </div>

            <div>
                <button type="submit" class="text-red-500 w-full font-semibold rounded-sm px-4 py-3 font-medium border border-red-200 hover:text-white hover:bg-red-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-red-600 focus:ring-offset-2">Register</button>
            </div>


        </form>
    </div>
</div>

@endsection