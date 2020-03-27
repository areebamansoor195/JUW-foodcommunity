<!DOCTYPE html>
<html lang="en">
 <?php       
 require 'config.php';
?>
<head>
  <title>JUW Foods</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
       img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}

@-webkit-keyframes fadein {
    from {bottom: 0; opacity: 0;} 
    to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
    from {bottom: 0; opacity: 0;}
    to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
    from {bottom: 30px; opacity: 1;} 
    to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
    from {bottom: 30px; opacity: 1;}
    to {bottom: 0; opacity: 0;}
}
  </style>
  </head>
  <body>

    <br>   

    <center>
	<div class="container">
	    <img src="images/order.png" width="100%" height="350"><br>
    <br>
    <br>
    <h2>Order Details</h2>
    <form action="orderin.php" method="post">
        <div class="form-group">
            <label for="name">Your Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
        </div>
        <div class="form-group">
            <label>Your number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter your number" name="number">
        </div>
        <div class="form-group">
            <label>Your order:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your ordered" name="ordered">
        </div>
        <div class="form-group">
            <label>Your quantity:</label>
            <input type="number" class="form-control" id="name" placeholder="Enter your qunatity" name="quantity">
        </div>
        <div class="form-group">
            <label>Your block:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your block" name="block">
        </div>

	    <div class="checkbox">
        <label><input type="checkbox" name="remember"> Confirm here!!</label>

        </div>
        <button type="submit" class="btn btn-info btn-block" name="done" style="width:30%;">Done</button>

</form>
</div>
</center>

</body>
