@extends('layouts.app')

@section('title', 'Post Title')

@section('content')
    <div class="p-4">
        <h1 class="text-3xl font-bold mb-4">Post Title</h1>
        <img src="https://via.placeholder.com/800x400" alt="Post Image" class="mb-4">
        <div class="text-gray-700">
            <p>Post content goes here...</p>
        </div>

        {{-- Heart Rating Section --}}
        <div class="mt-8">
            <h3 class="text-lg font-bold mb-2">Rate this post</h3>
            <button class="text-red-500 text-2xl">♥</button>
        </div>

        {{-- Comments Section --}}
        <div class="mt-8">
            <h3 class="text-lg font-bold mb-4">Comments</h3>
            {{-- Loop through comments here --}}
            <div class="bg-white p-4 rounded-lg shadow-md mb-4">
                <p class="font-bold">User Name</p>
                <p>This is a comment.</p>
            </div>

            <form action="">
                <textarea name="comment" class="w-full border rounded-md p-2" rows="4" placeholder="Add a comment..."></textarea>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md mt-2">Submit</button>
            </form>
        </div>
    </div>
@endsection