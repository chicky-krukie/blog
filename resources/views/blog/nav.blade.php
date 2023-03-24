<div class="mx-28">

             <style>
    .topnav input[type=text] {
    float: none;
    display: block;
    text-align: right;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
.navbar {
  overflow: hidden;
  background-color: #ffffff;
  width: 600px;
  margin: auto;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: #808080;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 13px;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 13px;  
  border: none;
  outline: none;
  color: #808080;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: white;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(128, 104, 104, 0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: #808080;
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

form.example input[type=text] {
  padding: 7px;
  font-size: 10px;
  border: 1px solid #808080;
  float: right;
  width: 10%;
  background: #f1f1f1;
}
a{
  font-size: 15px;
}
h3{
    align-self: auto;
}
</style>
    <div class="navbar">
  <a href="{{ url('/blog')  }}">HOME</a>
  <div class="dropdown">
    <button class="dropbtn">REVIEW INDEX
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">REVIEWS BY SCORE</a>
    </div>
  </div> 
  <div class="dropdown">
    <button class="dropbtn">SEASONAL ANIME
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


    </div>
