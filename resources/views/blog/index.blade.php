@extends('layouts.app')

@section('content')

<div style="background-color: rgb(124, 5, 5); min-height: 100vh;">
<div class="w-4/5 m-auto text-center" >
    <div class="py-15">
        <h1 class="text-6xl text-white">
            Movie Blog Posts
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10">
        <p class="w-2/6 mb-4 text-white bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
<div class="w-4/5 mx-auto mb-10">
    <a href="/blog/create" class="bg-black hover:bg-red-700 uppercase text-white text-xs font-extrabold py-3 px-5 rounded-3xl">
        Create post
    </a>
</div>
@endif

@foreach ($posts as $post)
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200 bg-black bg-opacity-35 rounded-lg">
        <div class="film-reel">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="{{ $post->title }}">
        </div>
        <div class="text-white">
            <h2 class="font-bold text-5xl pb-4">
                {{ $post->title }}
            </h2>

            <span>
                By <span class="font-bold italic">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at)) }}
            </span>

            <p class="text-xl pt-8 pb-10 leading-8 font-light">
                {{ $post->info }}
            </p>

            <div class="flex items-center space-x-2">
            <a href="/blog/{{ $post->slug }}" class="bg-red-500 hover:bg-red-700 uppercase text-white text-lg font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
              
                    <a 
                        href="/blog/{{ $post->slug }}/edit"
                        class="bg-transparent hover:bg-white hover:text-red-500 border border-white text-white uppercase text-xs font-extrabold py-3 px-5 rounded-3xl">
                        Edit
                    </a>

                    <form action="/blog/{{ $post->slug }}" method="POST">
                        @csrf
                        @method('delete')

                        <button type="submit" class="bg-transparent hover:bg-white hover:text-red-500 border border-white text-white uppercase text-xs font-extrabold py-3 px-5 rounded-3xl">
                            Delete
                        </button>

                    </form>
              
            @endif
        </div>
        </div>
    </div> 

@endforeach
</div>

@endsection
