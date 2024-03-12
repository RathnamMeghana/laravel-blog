@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto my-10 px-4">
    <section>
        @if(Session::has('message_sent'))
            <div class="p-4 mb-5 bg-green-100 text-green-800 rounded">
                {{ Session::get('message_sent') }}
            </div>
        @endif

        <form method="POST" action="{{ route('contact.send') }}" enctype="multipart/form-data" class="space-y-6 bg-white p-6 rounded shadow">
            @csrf
            <div>
                <input type="text" name="name" placeholder="Name" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="email" name="email" placeholder="Email address" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="tel" name="phone" placeholder="Phone" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('phone')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <textarea name="msg" placeholder="Message" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                @error('msg')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <button type="submit" class="w-full py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Send</button>
        </form>
    </section>
</div>
@endsection
