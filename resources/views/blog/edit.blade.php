@extends('blog.layout')
@section('content')

<div class="card">
    <div class="card-header text-lg font-semibold">Create Post</div>
    <hr class="my-2">
    <div class="card-body my-6">

        <form action="{{ url('blog/'.$post->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name='id' value="{{$post->id}}">
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Title</label>
                <input type="text" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your title" value="{{$post->title}}">
            </div>

            {{-- img upload --}}
            <img class="my-4" src="{{ asset($post->image) }}" style="width:656px; height:300px">
            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Image</label>
                <input type="file" name="image" id="image">
            </div>

            <div class="mb-3">
                <label class="block mb-2 font-medium text-gray-500 dark:text-white">Content</label>
                <textarea class="ckeditor form-control" name="content" rows="3">{{$post->content}}</textarea>
            </div>
            <input type="submit" value="Update" class="px-6 py-2 rounded-full border-2 border-black text-black" style="background-color: #e6e6e6;">
        </form>

    </div>
</div>
@stop


@include('blog.scripts')