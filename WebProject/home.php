<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>






<html>
<head>
<title>JUW food </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $(".editor-header a").click(function(e){
    e.preventDefault();

    var _val = $(this).data("role"),
        _sizeValIn = parseInt($(this).data("size-val") + 1),
        _sizeValRe = parseInt($(this).data("size-val") - 1),
        _size = $(this).data("size");
    if(_size == "in-size"){
      document.execCommand(_val, false, _sizeValIn + "px");
    } else{
      document.execCommand(_val, false, _sizeValRe + "px");
    }
  });
});

$(document).ready(function(){
  var $text = $("#text"),
      $submit = $("input[type='submit']"),
      $listComment = $(".list-comments"),
      $loading = $(".loading"),
      _data,
      $totalCom = $(".total-comment");

  $totalCom.text($(".list-comments > div").length);

  $($submit).click(function(){
    if($text.html() == ""){
      alert("Plesea write a comment!");
      $text.focus();
    } else{
      _data = $text.html();
      $.ajax({
        type: "POST",
        url: window.local,
        data: _data,
        cache: false,
        success: function(html){
          $loading.show().fadeOut(300);
          $listComment.append("<div>"+_data+"</div>");
          $text.html("");
          $totalCom.text($(".list-comments > div").length);
        }
      });
      return false;
    }
  });
});
     </script>
    <style>
		textarea{
  resize: none;
  outline: none;
  width: 100%;
  font-family: tahoma;
  background: #f9f9f9;
}

textarea:focus{
  background: #fff;
}

input[type="submit"]{
  width: 100%;
  padding: 5px 0px;
  font-weight: bold;
  margin-top: -6px;
}

.content{
  width: 100%;
}

.comments{
  width: 100%;
  margin: 30px auto;
}

.insert-text{
  position: relative;
}

.insert-text .loading{
  position: absolute;
  bottom: -25px;
  display: none;
}

.insert-text .total-comment{
  position: absolute;
  bottom: -25px;
  right: 0px;
}

.insert-text .total-comment:before{
  content: "Total comment: ";
  font-weight: bold;
}

.list-comments{
  margin-top: 30px;
  border: 1px solid #ccc;
  background: #f0f0f0;
}

.list-comments > div{
  padding: 10px;
  border-bottom: 1px solid #ccc;
}

.list-comments > div:last-child{
  border-bottom: none;
}

.editor{
  border: 1px solid #ccc;
  border-radius: 5px;
}

.editor-header{
  border-bottom: 1px solid #ccc;
}

.editor-header a{
  display: inline-block;
  padding: 10px;
  color: #666;
}

.editor-header a:hover{
  color: #000;
}

.editor-content{
  padding: 10px;
  outline: none;
  min-height: 80px;
  background: #f9f9f9;
  border-radius: 0px 0px 5px 5px;
}

.editor-content:focus{
  background: #fff;
}

b{
  font-weight: bold;
}

i{
  font-style: italic;
}

p{
  line-height: 20px;
}

a{
  text-decoration: none;
}

[data-role="bold"]{
  font-weight: bold;
}

[data-role="italic"]{
  font-style: italic;
}

[data-role="underline"]{
  text-decoration: underline;
}

[class^="menu"] {
  position: relative;
  top: 6px;
  display: block;
  width: 27px;
  height: 2px;
  margin: 0 auto;
  background: #999;
}

[class^="menu"]:before {
  content: '';
  top: -5px;
  width: 80%;
  position: relative;
  display: block;
  height: 2px;
  margin: 0 auto;
  background: #999;
}

[class^="menu"]:after {
  content: '';
  top: 3px;
  width: 80%;
  position: relative;
  display: block;
  height: 2px;
  margin: 0 auto;
  background: #999;
}

.menu-left {
  margin-right: 5px;
}

.menu-left:before{
  margin-right: 5px;
}

.menu-left:after{
  margin-right: 5px;
}

.menu-right {
  margin-left: 5px;
}

.menu-right:before{
  margin-left: 5px;
}

.menu-right:after{
  margin-left: 5px;
}
    </style>

  </head>
<body>
<nav class="navbar navbar-expand-sm bg-success">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="home.php"><img class="img-responsive" src="logo.png" height="80px" width="80px"></a>
 </div>
                   <ul class="nav navbar-nav navbar-right">
				   		  <li><a href="menu.html" class="btn text-white" style="background-color:transparent">Menu</a></li>
				   	      <li><a href="ourstory.html" class="btn text-white" style="background-color:transparent">Our Story</a></li>
						  <li><a href="contact.php" class="btn text-white" style="background-color:transparent">Contact Us</a></li>
				   	      <li><a href="login.php" class="btn text-white" style="background-color:transparent">Logout</a></li>

				   </ul>
 </div>
</nav>
<div class="container-fluid">
<img src="images/main.jpg" width="100%" height="600" style="opacity: 0.5; filter: alpha(opacity=50);">
<div class="centered" style=" position: absolute; top: 50%; left: 50%;  transform: translate(-50%, -50%);">
<h1 class="display-4">Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b> It's the food you love, delivered</h1>


</div>
</div>
</div>


<div class="container-fluid">
<div class="row">
<div class="col-sm-4">
  <img src="images/choose.png"  class="img-circle" width="104" height="136"> 
 <h3 align="center">choose</h3>

<div align="center"  class="description">Browse hundreds of menus to find the food you like</div>
</div>
<div class="col-sm-4">
  <img src="images/pay.png"  class="img-circle" width="104" height="136"> 
 <h3 align="center">Pay</h3>

<div align="center"  class="description">Pay fast &amp; secure online or on delivery</div>
</div>
<div class="col-sm-4">
<img src="images/enjoy.png" align="center" class="img-circle"  width="104px" height="136px"> 
<h3 align="center">Enjoy</h3>
<div align="center" class="description">Food is prepared &amp; delivered to your door</div>
</div>
</div>
</div><br><br><hr>
<div class="container-fluid">
<h1 class="display-4">Reviews</h1>
		<div class="content">
				<div class="comments ">
				  <div class="editor">
					<div class="editor-header">
					  <a href='#' data-role='bold'>B</a>
					  <a href='#' data-role='italic'>I</a>
					  <a href='#' data-role='underline'>U</a>
					  <a href='#' data-role='justifyleft'><i class="menu-left"></i></a>
					  <a href='#' data-role='justifycenter'><i class="menu-center"></i></a>
					  <a href='#' data-role='justifyright'><i class="menu-right"></i></a>
					</div>
					<div id="text" class="editor-content" contenteditable>
					  <p></p>
					  <p></p>
					  <p></p>
					</div>
				  </div>
				  <div class="insert-text">
					<span class="loading">Loading...</span>
					<br>
					<span class="total-comment"></span>
					<p>
					  <input class="bg-success text-white"type="submit" value="Comment" />
					</p>
				  </div><br>
				  <div class="list-comments">
					<div>Hello!</div>
					<div>My name's Tuan Linh.</div>
				  </div>
				</div>
			  </div>
			  </div>
  <br><br><br><br><br><br>

<hr>
  <p class="text-center text-dark"> CopyRight All pages are Reserved<br>Location : JUW </p>
<hr>





</body>
</html>
