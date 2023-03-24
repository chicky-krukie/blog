@extends('blog.layout')
@section('content')
<div class="card">
    <div class="card-header text-lg font-semibold">Create Post</div>
    <hr class="my-2">
    <div class="card-body my-6">

        <form action="{{ url('blog') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Title</label>
                <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your Title">
            </div>

            {{-- img upload --}}
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Image</label>
                <input type="file" name="image" id="image">
            </div>

            {{-- Genre--}}

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Genre</label>
                <input type="text" name="genre" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Genre">
            </div>

            {{-- Length  --}}

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Length</label>
                <input type="text" name="length" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Anime Length">
            </div>

            

            {{-- Year of Release --}}

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Year of Release</label>
                <input type="text" name="release" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Release Year">
            </div>


            {{-- Video --}}

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Video</label>
                <input type="file" name="video" id="video">
            </div>


            {{-- Content --}}
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Content</label>
                <input type="text" name="content" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Short Description">
            </div>

            {{-- Summary --}}

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Summary</label>
                <textarea class="ckeditor form-control" name="summary" rows="3"></textarea>
            </div>
            <input type="submit" value="Post" class="px-6 py-2 rounded-full border-2 border-black text-black" style="background-color: #e6e6e6;">
            
        </form>

    </div>
</div>
@stop


@include('blog.scripts')