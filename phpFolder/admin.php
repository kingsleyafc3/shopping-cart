<?php
session_start(); //Start the session
 //Get the user name from the previously registered super global variable

 //Continue to current page
header( 'Content-Type: text/html; charset=utf-8' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <title>Welcome To Admin Page Demonstration</title>
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

    <h1>Welcome To Admin Page</h1>
    <p><a href="logout.php">Logout</a></p> <!-- A link for the logout page -->
    <p>Admin Options:</p>
   		<a href="deletePro.html" class="button">Delete profile</a>
		<a href="changePass.html" class="button">Change password</a>
    	
</body>
</html>