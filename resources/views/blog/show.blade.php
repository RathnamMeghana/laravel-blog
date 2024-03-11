@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <div>
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <h1 class="text-6xl">
            {{ $post->title }}
        </h1>

    </div>
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-500">
        By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-700 pt-8 pb-10 leading-8 font-light">
        {{ $post->description }}
    </p>

    <div class="mt-10">
        <div class="mt-10">
            @foreach($post->comments as $comment)
                <div class="bg-gray-100 p-4 rounded-lg mb-4">
                    <p class="font-bold">{{ $comment->name }}</p>
                    <p class="mt-2">{{ $comment->comment }}</p>
                </div>
            @endforeach
        </div>
    </div>

    <div class="mt-10">
        <h3 class="text-xl font-semibold mb-4">Add a Comment</h3>
        <form action="{{ route('comments.store', $post->id) }}" method="POST" class="space-y-4">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                        Name
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text">
                </div>
                <div class="w-full md:w-1/2 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" name="email" type="email">
                </div>
            </div>
            <div class="mb-6">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="comment">
                    Comment
                </label>
                <textarea class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="comment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Add Comment
            </button>
        </form>
    </div>
</div>

@endsection 