<?php

 require 'config.php';

$name = $_POST['name'];
$number = $_POST['number'];
$ordered = $_POST['ordered'];
$quantity = $_POST['quantity'];
$block = $_POST['block'];
// $name =mysqli_real_escape_string($link,$_POST['name']) ;
// $number =mysqli_real_escape_string($link,$_POST['number']) ;
// $ordered =mysqli_real_escape_string($link,$_POST['ordered']) ;
// $quantity =mysqli_real_escape_string($link,$_POST['quantity']) ;
// $block =mysqli_real_escape_string($link,$_POST['block']) ;


$sql = "INSERT INTO booking( name, number, ordered , quantity , block) VALUES ('$name','$number','$ordered','$quantity','$block')";
 


 if (mysqli_query($link, $sql)) {
 
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }

  mysqli_close($link);
   
   
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
  </head>
  <body>
 <br>
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
  <br><br>
            <div class="container">
           <center> <img src="orderlogo.jpg" >  </center> <br><br>
                <h3 class="text-dark ">Your order will take time less than 40 minutes In shaa Allah. Have a nice Day with Scrumptious meal.</h3>
<center><button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#myModal">Go to home</button></center>
              
   
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                     
                      </div>
                      <div class="modal-body">
                        <p> Thank-you for availing our services!</p>
                      </div>
                      <div class="modal-footer">
                        <a href="home.php" role="button" class="btn btn-success text-white" >Close</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
  <br><br><br>  
<br><br><br>
<div class="container-fluid  well text-center">CopyRight All pages are Reserved<br>Location : JUW
</div> 
   </body>
</html>
