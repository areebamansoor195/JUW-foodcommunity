
<?php

require 'config.php';
?>


<html>
<head>
<title>JUW food | Contact </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

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
<br><br><br>
<div class="container">
<center><h1 class="display-4">Contact Us </h1><img src="contactimage.png"><center><hr></center><p>Thank you for your interest. Please complete the form below so we can better understand your needs.If you have questions that require immediate attention, please contact us at <b>952-887-3344</b>. Our email address <b>juwfood@gmail.com</b></p><center><hr></center>
<br><br></center>
</div>
<div class="container">
<div class="content">
  <form action="contactin.php" method="post">
      <div class="form-group">
      <label for="name">Your Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Your Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>
<div class="form-group">
  <label for="comment">Your Message:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>

    <button type="submit" class="btn btn-success text-white"><a href="home.php" >Submit</a></button>
  </form>
  </div>
  </div>
  
  <hr>
  <p class="text-center text-dark"> CopyRight All pages are Reserved<br>Location : JUW </p>
<hr>

</body>
</html>