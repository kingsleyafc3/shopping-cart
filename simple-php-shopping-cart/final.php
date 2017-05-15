<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<style type="text/css">
    body{
  font-family: Verdana,sans-serif;margin:0;
  
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</style>
</head>
<body>
<h1 align="center">Thank You for shopping with us!</h1>

<?php 
date_default_timezone_set('America/New_York');
$date = strtotime("+5 day", strtotime(date("Y-m-d")));

echo "<h3 style='color:blue' align='center'>Your order will arrive on " . date("Y-m-d", $date) . "</h3><br>";
?>

<div align="center">
    <a href="../test.html">Go to the home page &nbsp;</a>

</div>
<?php 
if(session_id() == '') {
   
}
else{
	session_destroy();

}    

 ?>
</body>
</html>


