<?php
session_start(); //Start the current session
session_destroy(); //Destroy it! So we are logged out now
echo "<script type='text/javascript'> 
                    alert('You are logged out now');
                    window.location = 'http://codd.cs.gsu.edu/~ppatel155/final/signin.html';
            </script>";
header("location:../signin.html?msg=Successfully Logged out"); // Move back to login.php with a logout message
?>