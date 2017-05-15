<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="./cssFolder/home.css">
	<title>Contact Us!</title>
</head>
<body>
<div id="mySidenav" class="sidenav">
<ul class = "links">

  <li class = "navi"><a href="test.html">Homepage</a></li>
  
  </ul>
</div>

<h1>Welcome <?php echo $_POST["firstname"];?><br></h1>
<h3>
Below is detailed info about your issue.<br>
Print it for your records.<br><br>
</h3>
<div class="one">

Reference number:<?php echo(mt_rand(100,1000))  ;	?> <br>
First Name: <?php echo $_POST['firstname'];?><br>
Last  Name: <?php echo $_POST['lastname'];?><br>
Issue     : <?php echo $_POST["ta"];?><br>
<br><br>
<div align="center">
</div>
<FORM>
<INPUT TYPE="button" name="Print" value="Print" onClick="window.print()">
</FORM>
</div>


</body>
</html>