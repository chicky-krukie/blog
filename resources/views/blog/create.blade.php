@extends('blog.layout')
@section('content')
<div class="card">
    <div class="card-header text-lg font-semibold">Create Post</div>
    <hr class="my-2">
    <div class="card-body my-6">

        <form action="{{ url('blog') }}" method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}

            {{-- title input  --}}
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Title</label>
                <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your title">
            </div>

            {{-- img upload --}}
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Image</label>
                <input type="file" name="image" id="image">
            </div>
<<<<<<< HEAD
            {{-- content input --}}
=======

>>>>>>> bb17cea995409ca5d2092faf426ef04c30c97c9e
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Content</label>
                <textarea class="ckeditor form-control" name="content" rows="3"></textarea>
            </div>
            <input type="submit" value="Post" class="px-6 py-2 rounded-full border-2 border-black text-black" style="background-color: #e6e6e6;">
            
        </form>

    </div>
</div>
@stop


@include('blog.scripts')