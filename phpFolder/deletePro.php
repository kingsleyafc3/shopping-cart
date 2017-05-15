<!DOCTYPE html>
<html>
<head>
	<title>Delete Pro</title>
	<link rel="stylesheet" type="text/css" href="../cssFolder/home.css">
<style type="text/css">
a.button {
    -webkit-appearance: button;
    -moz-appearance: button;
    appearance: button;
	height: 25px;
    text-decoration: none;
    color: initial;
}
  body{
  font-family: Verdana,sans-serif;margin:0;
  
  text-align: center;
}
</style>
</head>
<body>
<div id="mySidenav" class="sidenav">
<ul class = "links">
<li class = "navi"><a href="admin.php">Go Back to Admin Homepage</a></li>
</ul>
</div>
	<?php
		include 'connection.php';
		$name = $_POST['user'];
		$query = "SELECT email FROM customers WHERE email = '$name'";
         $result = mysqli_query( $con, $query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
            echo "<div>";
            echo "No such username(Email)";
            echo "<a href='deletePro.html'>"."Please try again". "</a>";
            echo "</div>";
        }
		else{
			
		$query = "DELETE FROM customers WHERE email='$name'";
		$result = mysqli_query( $con, $query);
        	echo "You have successfully deleted userprofile for the following user:".$name;
    }
	?>
</body>
</html>