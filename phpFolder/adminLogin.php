
<!DOCTYPE html>
<html>
<head>
    <title></title>
      <link rel="stylesheet" type="text/css" href="../cssFolder/home.css">
<style type="text/css">
  body{
  font-family: Verdana,sans-serif;margin:0;
  
  text-align: center;
}
</style>
</head>
<body>
<?php
include 'connection.php';

if(isset($_POST["user-name"], $_POST["pass-word"])) 
{     

        $name = $_POST["user-name"]; 
        $password = $_POST["pass-word"]; 

        $query = "SELECT user_name FROM login_admin WHERE user_name = '$name' AND user_pass = '$password'";
         $result = mysqli_query( $con, $query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
             echo "<script type='text/javascript'> 
                    alert('Sorry the user and password does not match.');
                    window.location = '../adminLogin.html';
            </script>";
        }
        else {

            
              echo "<script type='text/javascript'> 
                    alert('Entering the admin page');
                    window.location = 'admin.php';
            </script>";
            // *** My PERSONAL preference is to use {} every where, it just makes it easier if you add  
            // code into the condition later
         
            // redirect to shopping cart
        }
}
   ?>
</body>
</html>
