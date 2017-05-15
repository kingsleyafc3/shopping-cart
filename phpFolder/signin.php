<?php
include 'connection.php';

if(isset($_POST["username"], $_POST["pwd"])) 
{     

        $name = $_POST["username"]; 
        $password = $_POST["pwd"]; 

        $query = "SELECT email FROM customers WHERE email = '$name' AND password = '$password'";
         $result = mysqli_query( $con, $query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
            echo "<script type='text/javascript'> 
                    alert('Sorry the user and password does not match.');
                    window.location = '../signin.html';
            </script>";
            
        }
        else {

            session_start();
        $_SESSION["username"] = $name;
        $_SESSION["password"] = $password; 
        header("Location: profile.php");
            // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add  
            // code into the condition later
            $loggedIn = true;
            // redirect to shopping cart
        }
}
   ?>