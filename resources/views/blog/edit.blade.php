@extends('layouts.app')

@section('content')

<div class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://img.freepik.com/free-photo/cinema-elements-red-background-with-copy-space_23-2148457853.jpg?t=st=1710358463~exp=1710362063~hmac=1283b1c67387a75e7293fa1c551221ced250f6af296f8f7650ad5f9d26d5d814&w=1800');">
    
    

    <div class="w-full lg:w-2/4 lg:ml-auto bg-black p-4 md:p-12" style="opacity: 0.9; margin-right: 2rem;"> 
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
