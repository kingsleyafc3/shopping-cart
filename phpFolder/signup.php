<?php
include 'connection.php';

$firstName=$_POST["firstname"];
$lastName=$_POST["lastname"];
$email=$_POST["email"];
$pwd=$_POST["pwd"];
$cpwd=$_POST["cpwd"];

$sql="INSERT INTO customers (firstName, lastName, email, password, confirmPassword) VALUES ('$firstName','$lastName','$email','$pwd',
	'$cpwd')";

if ($con->query($sql) === TRUE) {
   echo '<script type="text/javascript">
           window.location = "../signin.html"
      </script>';
    /*change the local host to codd server*/
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
mysqli_close($con);
?>
