<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title></title>
    <style type="text/css">
        body{
           
            font-size: 25px;
            margin-top: 100px;

        }
        a{
            text-decoration: none;
        }
        .profile{
            border-width: 3px;
            border-color: black;
            border-style: solid;
           margin-left: 30%;
            margin-right: 30%;
        }
    </style>
</head>
<body>

<?php
require_once('connection.php');
require_once('signin.php');
session_start();
$name = $_SESSION["username"];
$sql = "SELECT * FROM customers where email='$name'";
$result3 = mysqli_query($con,$sql);
while($row3 = mysqli_fetch_array($result3))
{
$fname=$row3['firstName'];
$lname=$row3['lastName'];
$email = $row3['email'];
}
?>
<div class="profile">
    <table width="500" border="0" align="center" cellpadding="0">
        <tr>
            <td height="26" colspan="2">Your Profile Information </td>

            </td>
        </tr>
        <tr>
            <td width="129" rowspan="5"><img src="../product-images/profile.png" width="129" height="129" alt="no image found"/></td>
            <td width="82" valign="top"><div align="left">FirstName:</div></td>
            <td width="165" valign="top"><?php echo $fname ?></td>
        </tr>
        <tr>
            <td valign="top"><div align="left">LastName:</div></td>
            <td valign="top"><?php echo $lname ?></td>
        </tr>
        <tr>
            <td valign="top"><div align="left">Email:</div></td>
            <td valign="top"><?php echo $email ?></td>
        </tr>

    </table>
</div>
<div style="text-align:center;">
    <a href="../test.html">Go to the home page </a>
    <a href="logout.php" style="text-align:center;">Logout</a>
</div>
</body>
</html>