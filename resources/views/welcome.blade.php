<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>horror-SpaceWhales</title>
</head>

<style>
body {
    align-self: center;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #FFFFFF;
  font-size: 14px;
  
}

.navbar a {
  float: left;
  font-size: 14px;
  color: grey;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
  display: inline-block;
}

.dropdown .dropbtn {
  font-size: 14px;  
  border: none;
  outline: none;
  color: grey;
  padding: 5px 12px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-align:center;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #FFFFFF;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: grey;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}
.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body style="background-color: #3b2345;" class="mx-96 my-28">
    <!--  -->
   <div class="bg-white p-20" style="color: #666666;">
        <!-- @yield('content') -->

        <div class="text-center font-semibold" style="color: #666666; font-size: 27px">
            <h2>SpaceWhales Anime Blog</h2>
            <hr class="my-8 border-t-2">

</head>
<body>

<div class="navbar">

  <a href="#home">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">REVIEW INDEX<span class="material-symbols-outlined">
expand_more
</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">REVIEW BY SCORE</a>
    </div>
  </div> 
   <div class="dropdown">
    <button class="dropbtn">SEASONAL ANIME<span class="material-symbols-outlined">
expand_more
</span>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">FALL 2020</a>
       <a href="#">SPRING 2020</a>
        <a href="#">WINTER 2020</a>
    </div>
  </div> 
  <a href="#news">OTHER POSTS</a>
  <a href="#news">SUPER CUB REVIEW</a>
</div>
</body>
            <!-- <div class="font-normal text-sm flex justify-between" style="color: #999999">
                <a class="">HOME</a>
                <a>REVIEW INDEX</a>
                <a>SEASONAL ANIME</a>
                <a>OTHER POSTS</a>
                <a href="">SUPER CUB REVIEW</a>
            </div> -->
            <hr class="my-8 border-t-2">
        </div>

        <div>
            <h1 class="my-4 font-medium text-lg" style="color: #999999">Tag: <span>horror</span></h1>
            <hr>
        </div>

        <article class="my-4">
            <div>
                <!-- Title -->
                <h1 class="font-semibold my-2" style="font-size: 32px;">Jujutsu Kaisen Review</h1>
                <img class="my-4" src="https://spacewhaleshome.files.wordpress.com/2021/04/jujutsu-kaisen-1613518270587.jpeg?w=656&h=300&crop=1">
                <p style="font-size: 12px; color: #999999 ">APRIL 12, 2021 ~ LEAVE A COMMENT</p>
                <p class="my-6 text-xl font-light" style="color: #666666">"I can almost guarantee you'll crack a smile watching it because it just doesn't trip on landmines"</p>
            </div>
        </article>
        
   </div> 
   
</body>
</html>