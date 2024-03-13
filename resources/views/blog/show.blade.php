@extends('layouts.app')

@section('content')
<div class="w-full m-auto text-center py-12">
    <h1 class="text-6xl text-white">
        {{ $post->title }}
    </h1>
    <p class="text-xl text-white mt-4">
        By <span class="font-bold italic">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </p>
</div>

<div class="w-11/12 mx-auto mb-6">
    <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}" class="rounded-lg shadow-lg w-full h-auto">
</div>


<div class="w-11/12 mx-auto py-10 px-6 bg-black bg-opacity-50 rounded-lg border-b border-gray-200">
    <div class="grid md:grid-cols-2 gap-10">
    
        <div class="text-white space-y-4">
            <p class="text-xl leading-relaxed font-light">
                {{ $post->description }}
            </p>
        </div>

      
        <div class="text-white space-y-4">
            <h3 class="text-2xl font-semibold mb-4">Share Your Thoughts</h3>
            <form action="{{ route('comments.store', $post->id) }}" method="POST" class="space-y-4">
                @csrf
                <div class="flex flex-col space-y-4">
                    <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="name" name="name" type="text" placeholder="Name">
                    <input class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="email" name="email" type="email" placeholder="Email">
                    <textarea class="appearance-none block w-full bg-gray-700 text-white border border-gray-600 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-gray-600" id="comment" name="comment" rows="3" placeholder="Comment"></textarea>
                    <button type="submit" class="inline-flex justify-center w-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Post Comment
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="mt-10">
        <h3 class="text-2xl font-semibold mb-4 text-white">Comments</h3>
        @foreach($post->comments as $comment)
            <div class="bg-gray-800 bg-opacity-50 p-5 rounded-lg mb-4">
                <p class="font-bold text-lg text-white">{{ $comment->name }}</p>
                <p class="mt-2 text-md text-white">{{ $comment->comment }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
