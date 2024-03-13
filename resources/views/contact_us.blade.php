@extends('layouts.app')

@section('content')
<div class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://images.pexels.com/photos/7991398/pexels-photo-7991398.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2'); background-size: cover; background-position: center center;">
    <div class="w-full lg:w-1/2 mx-auto bg-black rounded-lg shadow-xl" style="opacity: 0.9;">
        <div class="p-4 md:p-8 text-center lg:text-left">
            <h1 class="text-3xl font-bold text-white">Contact Us</h1>

            @if(Session::has('message_sent'))
                <div class="mt-4 bg-green-500 text-white font-bold py-2 px-4 rounded">
                    {{ Session::get('message_sent') }}
                </div>
            @endif

            <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data" class="mt-6">
                @csrf
                
                <div class="mb-4">
                    <input type="text" name="name" placeholder="Your Name" class="w-full bg-gray-800 text-white rounded border border-gray-600 leading-tight focus:outline-none focus:bg-gray-700 p-4" style="height: 50px;">
                    @error('name')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="email" name="email" placeholder="Your Email" class="w-full bg-gray-800 text-white rounded border border-gray-600 leading-tight focus:outline-none focus:bg-gray-700 p-4" style="height: 50px;">
                    @error('email')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <input type="tel" name="phone" placeholder="Phone" class="w-full bg-gray-800 text-white rounded border border-gray-600 leading-tight focus:outline-none focus:bg-gray-700 p-4" style="height: 50px;">
                    @error('phone')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <textarea name="msg" placeholder="Your Message" rows="6" class="w-full bg-gray-800 text-white rounded border border-gray-600 leading-tight focus:outline-none focus:bg-gray-700 p-4"></textarea>
                    @error('msg')
                        <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4 text-right">
                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" style="height: 50px;">
                        Send Message
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection