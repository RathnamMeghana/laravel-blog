@extends('layouts.app')

@section('content')

<div class="flex items-center h-auto lg:h-screen flex-wrap mx-auto my-32 lg:my-0" style="background-image:url('https://img.freepik.com/free-photo/arrangement-cinema-elements-red-background-with-copy-space_23-2148457847.jpg?t=st=1710416091~exp=1710419691~hmac=f3a2183fe406668f12c1f9b4495ba87f8ff1f9857a4078f8ba599a5ff04b1c6b&w=1800'); background-size: cover; background-position: center center;">

    <div class="w-full lg:w-3/5 p-4 md:p-8 lg:order-1 order-2">
        <div class="bg-black rounded-lg p-4 md:p-8" style="opacity: 0.9;">
            <h1 class="text-3xl font-bold text-white">Create Post</h1>
            

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

        <form action="/blog" method="POST" enctype="multipart/form-data" class="p-4 md:p-8 text-center lg:text-left">
            @csrf

            <input type="text" name="title" placeholder="Title..." class="bg-transparent block border-b-2 w-full h-10 text-xl text-white outline-none mb-4">

            <textarea name="info" placeholder="Info..." class="bg-transparent block border-b-2 w-full h-20 text-lg text-white outline-none mb-4"></textarea>

            <textarea name="description" placeholder="Description..." class="bg-transparent block border-b-2 w-full h-20 text-lg text-white outline-none mb-4"></textarea>

            <div class="bg-grey-lighter pt-5">
                <label class="flex flex-col items-center px-4 py-4 bg-white text-blue rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue-500 hover:text-white">
                    <span class="mt-2 text-base leading-normal">
                        Select a file
                    </span>
                    <input type="file" name="image" class="hidden">
                </label>
            </div>

            <button type="submit" class="uppercase mt-5 bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Submit Post
            </button>
        </form>
    </div>
</div>


@endsection
