@extends('layouts.app')

@section('content')

<div class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://miro.medium.com/v2/resize:fit:1200/0*z9WXKtzmXIvVj6UK.'); background-size: cover; background-position: center center;">

    
    <div class="flex flex-col md:flex-row  h-4/6 items-center w-full max-w-4xl mx-auto bg-black bg-opacity-75 rounded-none p-6">
        
        <div class="w-full md:w-1/2">
    <img class="object-cover w-full h-64 md:h-auto" src="https://img.freepik.com/free-photo/one-person-typing-laptop-night-generated-by-ai_188544-27872.jpg?t=st=1710362616~exp=1710366216~hmac=b4579727b8471e3f479ec393cb959d18cdc5105cf62fac64c5c7e1459c01c8dd&w=1800" alt="Login Image" >
</div>

        
        <div class="w-full md:w-1/2 mt-6 md:mt-0" style="margin-left: 20px">
            <div class="max-w-md w-full mx-auto">
                <h2 class="text-3xl text-white font-bold mb-6 text-center">Login</h2>
                
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf

                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" class="w-full p-3 text-white bg-gray-700 border border-gray-600 rounded-md" required>
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="w-full p-3 text-white bg-gray-700 border border-gray-600 rounded-md" required>
                    </div>

                    <div class="flex items-center justify-between">
                        <label class="inline-flex items-center">
                            <input type="checkbox" class="form-checkbox text-text-red-600 bg-gray-700 border-gray-600" name="remember">
                            <span class="ml-2 text-sm text-white">Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="text-sm text-white hover:text-red-600">Forgot password?</a>
                    </div>

                    <button type="submit" class="w-full p-3 bg-red-500 text-white rounded-md hover:bg-red-600">Login</button>
                </form>

                <p class="mt-6 text-sm text-center text-white">
                    Don't have an account? <a href="{{ route('register') }}" class="text-white hover:text-red-600">Sign up now</a>.
                </p>
            </div>
        </div>
        
    </div>
</div>

@endsection
