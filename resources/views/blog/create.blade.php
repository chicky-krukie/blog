@extends('blog.layout')
@section('content')
<div class="card">
    <div class="card-header">Create Post</div>
    <div class="card-body">

        <form action="{{ url('blog') }}" method="post">
            {!! csrf_field() !!}
            <!-- @csrf -->
            <!-- { csrf_field() } -->
            <div class="mb-3">
                <label class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="your title">
            </div>
            <div class="mb-3">
                <label class="form-label">Content</label>
                <textarea class="ckeditor form-control" name="content" rows="3"></textarea>
            </div>
            <input type="submit" value="Post" class="btn btn-success">
        </form>

    </div>
</div>
@stop


@include('blog.scripts')