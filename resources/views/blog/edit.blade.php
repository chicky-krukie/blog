@extends('blog.layout')
@section('content')

<div class="card">
    <div class="card-header">Create Post</div>
    <div class="card-body">

        <form action="{{ url('blog/'.$post->id) }}" method="post">
            {!! csrf_field() !!}
            @method("PATCH")
            <input type="hidden" name='id' value="{{$post->id}}">
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" placeholder="your title" value="{{$post->title}}">
            </div>

            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="ckeditor form-control" name="content" rows="3">{{$post->content}}</textarea>
            </div>
            <input type="submit" value="Update" class="btn btn-success">
        </form>

    </div>
</div>
@stop


@include('blog.scripts')