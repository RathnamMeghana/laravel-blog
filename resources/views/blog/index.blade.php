@extends('layouts.app')

@section('content')

<div style="background-color: rgb(124, 5, 5); min-height: 100vh;">
<div class="w-4/5 m-auto text-center" >
    <div class="py-15">
        <h1 class="text-6xl text-white">
            Movie Blog Posts
        </h1>
    </div>
    <div class="mb-3">
        <form action="">
            <div class="flex justify-center">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input type="search" name="search" class="form-input block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-black text-white placeholder-gray-500 focus:outline-none focus:bg-black focus:border-black focus:placeholder-gray-400 focus:text-white" placeholder="Search" aria-label="Search">
                </div>
                <button class="ml-3 bg-black text-white px-3 py-2 rounded-md focus:outline-none" type="submit">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </button>
            </div>
        </form>
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
    <a href="/blog/create" class="bg-black hover:bg-gray-200 hover:text-black uppercase text-white text-xs font-extrabold py-3 px-5 rounded-3xl">
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
