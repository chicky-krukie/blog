@extends('blog.layout')
@section('content')

<div class="text-center font-semibold" style="color: #666666; font-size: 27px">
    <h2>SpaceWhales Anime Blog</h2>
        <hr class="my-8 border-t-2">

    
        @include('blog.nav')
    
    <hr class="my-8 border-t-2">

    <div>
        <!-- Title -->
        <h1 class="font-semibold my-2" style="font-size: 32px;">{{$posts->title}}</h1>
        <center><img class="my-4" src="{{$posts->image}}"></center>
        <p style="font-size: 12px; color: #999999 ">{{$posts->created_at}}</p>
        <p class="my-6 text-lg font-light" style="color: #666666">
            <span class="font-semibold">Title:</span> {{$posts->title}} <br>
            <span class="font-semibold">Length:</span> {{$posts->length}} <br>
            <span class="font-semibold">Genre:</span>  {{$posts->genre}} <br>
            <span class="font-semibold">Year of release:</span> {{$posts->release}} <br>
        </p>
    </div>

    <div class="my-6 font-light text-lg text-ri">
        <p>{{$posts->summary}}</p>
    </div>

    <hr class="my-16">
    
   


</div>

@endsection