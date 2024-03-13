@extends('layouts.app')

@section('content')
<main class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://miro.medium.com/v2/resize:fit:1200/0*z9WXKtzmXIvVj6UK.'); background-size: cover; background-position: center center;">
    <div class="flex flex-col md:flex-row h-4/6 items-center w-full max-w-4xl mx-auto bg-black bg-opacity-75 rounded-none p-6">
        
        <div class="w-full md:w-1/2 mt-6 md:mt-0">
            <div class="max-w-md w-full mx-auto">
                <h2 class="text-3xl text-white font-bold mb-6 text-center">Register</h2>
                
                <form class="space-y-6" action="{{ route('register') }}" method="POST">
                    @csrf

                    <div>
                        <label for="name" class="sr-only">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" class="w-full p-3 text-white bg-gray-700 border @error('name') border-red-500 @else border-gray-600 @enderror rounded-md" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full p-3 text-white bg-gray-700 border @error('email') border-red-500 @else border-gray-600 @enderror rounded-md" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-3 text-white bg-gray-700 border @error('password') border-red-500 @else border-gray-600 @enderror rounded-md" required>
                        @error('password')
                            <p class="text-red-500 text-xs italic mt-4">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label for="password-confirm" class="sr-only">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password-confirm" placeholder="Confirm your password" class="w-full p-3 text-white bg-gray-700 border border-gray-600 rounded-md" required>
                    </div>

                    <button type="submit" class="w-full p-3 bg-red-500 text-white rounded-md hover:bg-red-600">Register</button>
                </form>

                <p class="mt-6 text-sm text-center text-white">
                    Already have an account? <a href="{{ route('login') }}" class="text-white hover:text-red-600">Login</a>.
                </p>
            </div>
        </div>

        <div class="w-full md:w-1/2 flex justify-center items-center mt-6 md:mt-0">
            <img class="object-cover w-full h-64 md:h-auto" src="https://img.freepik.com/free-photo/one-person-typing-laptop-night-generated-by-ai_188544-27872.jpg?t=st=1710362616~exp=1710366216~hmac=b4579727b8471e3f479ec393cb959d18cdc5105cf62fac64c5c7e1459c01c8dd&w=1800" alt="Registration Side Image" style="margin-left: 30px">
        </div>
        
    </div>
</main>
@endsection
