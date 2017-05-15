<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Daily UI - 002 - Credit Card Form</title>
    
    
    <link rel="stylesheet" href="css/normalize.css">

    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Mono'>

        <link rel="stylesheet" href="css/checkout.css">

  </head>

  <body>
  <div id="mySidenav" class="sidenav">
<ul class = "links">

  <li class = "navi"><a href="../signin.html">Sign-in</a></li>
  <li class = "navi"><a href="../simple-php-shopping-cart/index.php">Items</a></li>
  <li class = "navi"><a href="../phpFolder/profile.php">Profile</a></li>
  <li class = "navi"><a href="../contact.html">Contact</a></li>
  <li class = "navi"><a href="../adminLogin.html">Admin</a></li>
  </ul>
</div>

    
<h1>Total
<span><?php session_start();
$total = $_SESSION["total"];
echo $total;
?></span>
<i class="fa fa-lock"></i></h1>
<div id="container">
  <form action="final.php">
    <p>
      <label>Name On Card</label>
      <input type="text" placeholder="Enter your name"/>
    </p>
    <p>
      <label>Card Number</label>
      <input type="number" placeholder="Enter your VISA/MasterCard"/>
    </p>
    <p>
      <label>Enter Shipping Address</label>
      <input type="text" placeholder="Street"/>
    </p>
    <p>
      <label>Enter City</label>
      <input type="text" placeholder="City"/>
    </p>
    <p>
      <label>Billing Zip Code</label>
      <input type="number" placeholder="00000"/>
    </p>
  <input type="submit" value="Submit Payment"/>
  </form>
</div>
    
 
    
  </body>
</html>






