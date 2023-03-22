@extends('blog.layout')
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-9">
                <div class="card">

                    <div class="card-header">
                        <h2>Sample Blog</h2>
                    </div>

                    <div class="card-body">
                       <a href="{{ url('/blog/create') }}" class="btn btn-success btn small">Create Post</a>

                       <br><br>
                       <h4><small>BLOG POSTS</small></h4>

                       @foreach($posts as $post)
                        <hr>
                        <h2>{{ $post->title }}</h2>
                        <h5>Posted at {{ $post->created_at }}</h5>
                        <p>{!! $post->content !!}</p>
                        <br><br>
                        <a href="{{ url('/blog/' .$post->id . '/edit') }}" class="btn btn-primary btn-sm">edit</a>
                        @endforeach
                    </div>

                </div>
           </div> 
        </div>
    </div>
@endsection