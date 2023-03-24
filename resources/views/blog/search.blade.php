@extends('blog.layout')
@section('content')


<div class="text-center font-semibold" style="color: #666666; font-size: 27px">
    <h2>SpaceWhales Anime Blog</h2>
    <hr class="my-8 border-t-2">
@include('blog.nav')
    <hr class="my-8 border-t-2">
</div>

<div>
    <h1 class="my-4 font-medium text-lg" style="color: #999999">Tag: <span>horror</span></h1>
    <hr>
</div>

<article class="my-4 grid grid grid-cols-3">

    <!-- row 1-->
    <div class="col-span-2">

        <!-- @foreach($posts as $post)


        <div>
            <h1 class="font-semibold my-2" style="font-size: 32px;">{{ $post->title }}</h1>
            <img class="my-4" src="https://spacewhaleshome.files.wordpress.com/2019/12/beladonna.jpg?w=656&h=300&crop=1">
            <p style="font-size: 12px; color: #999999 ">POSTED AT {{ $post->created_at }}</p>
            <p class="my-6 text-xl font-light" style="color: #666666">{!! $post->content !!}</p>
        </div>

        <hr class="my-16">
        @endforeach -->

             @foreach ($posts as $post)
                
                <div>
                    <?php $checker = $post->id?>
                    <a href="show/{{$post->id}}" class="font-semibold my-2" style="font-size: 32px;">{{ $post->title }}</a>
                    <a href="show/{{$post->id}}"><img class="my-4" src="{{ asset($post->image) }}"
                            style="width:656px; height:300px"></a>
                    <p style="font-size: 12px; color: #999999 ">POSTED AT {{ $post->created_at }}</p>
                    <p class="my-6 text-xl font-light" style="color: #666666">{!! $post->content !!}</p>
                </div>

                <hr class="my-16">
            @endforeach



        <!-- @foreach($posts as $post)
            <hr class="my-16">

            <div>
              <h1 class="font-semibold my-2" style="font-size: 32px;">{{ $post->title }}</h1>
              <img class="my-4" src="https://spacewhaleshome.files.wordpress.com/2019/12/beladonna.jpg?w=656&h=300&crop=1">
              <p style="font-size: 12px; color: #999999 ">POSTED AT {{ $post->created_at }}</p>
              <p class="my-6 text-xl font-light" style="color: #666666">{!! $post->content !!}</p>
            </div>
        @endforeach -->



    </div>

    <!-- row 2 -->

    <!-- <div class="grid">
            <form action="{{ url('/search')}}" method="get" accept-charset="utf-8">
                            <div class="form-search" style="float:right">
                                <div class="form-group" style="display:flex"> 
                                <input type="search" name="title" class="form-control" placeholder="Search Title">
                            </div>
                            <button   button type="submit" class="btn btn-primary">Search</button>
                            </div>
                        </form>
          <div class="justify-self-end">
            <a href="{{ url('/blog/create') }}" class="px-6 py-4 rounded-full border-2 border-black text-black" style="float:left; background-color: #e6e6e6;">Create Post</a>
          </div>
        </div> -->

    <div class="grid gap-4">
        <div class="justify-self-end">
            <div class="my-6">
                <form action="{{ url('/search')}}" method="get" accept-charset="utf-8">
                    <div class="form-search">
                        <div class="form-group" style="display:flex">
                            <input type="search" name="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Title">
                        </div>
                        <button button type="submit" class="">Search</button>
                    </div>
                </form>
            </div>

            <div>
                <a href="{{ url('/blog/create') }}" class="px-6 py-4 rounded-full border-2 border-black text-black" style="float:left; background-color: #e6e6e6;">Create Post</a>
            </div>

        </div>
    </div>




</article>






<!-- <div class="container">
        <div class="row">
           <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-lg">
                        <h1>Space Whale</h1>
                    </div>
                    <div class="card-body">
                       <a href="{{ url('/blog/create') }}" class="btn btn-success btn small" style="float:left">Create Post</a>
                       
        
                       </div>
                        </form>
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
        </div> -->
</div>

<!-- <div class="bg-teal-50"></div> -->



@endsection