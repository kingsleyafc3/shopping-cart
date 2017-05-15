<!DOCTYPE html>
<html>
<head>
  <title>Change Pass</title>
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
  <?php
    include 'connection.php';
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    $query = "SELECT email FROM customers WHERE email = '$name'";
         $result = mysqli_query( $con, $query);

        // *** Error checking, what if !$result? eg query is broken

        $row = mysqli_fetch_array($result);

        if(!$row){
            echo "<div>";
            echo "No such username(Email)";
            echo "<a href='changePass.html'>"."Please try again". "</a>";
            echo "</div>";
        }
    else{
      
    $query = "UPDATE customers SET password='$pass' WHERE email='$name';";
    $result = mysqli_query( $con, $query);
          echo "You have successfully changed the password for the following user:".$name;
          echo  "<a href='../signin.html'>"."Click here to go back to the sigin page"."</a>";
    }
  ?>
</body>
</html>