@extends('layouts.app')

@section('content')

<div class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://img.freepik.com/free-vector/flat-design-old-film-background_23-2151002460.jpg?t=st=1710330443~exp=1710334043~hmac=e0612eccfa38758282de5e0876dba5300b38d599a2d6616cd38fe11e19925b96&w=1480');">
    
     <div class="w-full lg:w-2/5 lg:order-1">
        <img src="../../images/film.png" alt="Film" class="rounded-lg  hidden lg:block">
    </div>

    <div class="w-full lg:w-2/4 lg:order-1 bg-black mx-6 lg:mx-0 p-4 md:p-12" style="opacity: 0.9;">
        <h1 class="text-3xl font-bold pt-8 lg:pt-0 text-white">Update Post</h1>

        @if ($errors->any())
            <div class="m-auto">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="mb-4 text-white bg-red-700 rounded-2xl py-4 px-4">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data" class="p-4 md:p-8 text-center lg:text-left">
            @csrf
            @method('PUT')

            <input 
                type="text"
                name="title"
                value="{{ $post->title }}"
                class="bg-transparent block border-b-2 w-full h-10 text-xl text-white outline-none mb-4">

            <textarea 
                name="info"
                class="bg-transparent block border-b-2 w-full h-20 text-lg text-white outline-none mb-4">{{ $post->info }}</textarea>

            <textarea 
                name="description"
                class="bg-transparent block border-b-2 w-full h-20 text-lg text-white outline-none mb-4">{{ $post->description }}</textarea>

            <button    
                type="submit"
                class="uppercase mt-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Submit Post
            </button>
        </form>
    </div>
   
</div>

@endsection
