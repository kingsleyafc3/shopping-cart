<?php 
include 'connection.php';

$sql = "CREATE TABLE customers (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstName VARCHAR(30) NOT NULL,
lastName VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(15) NOT NULL,
confirmPassword VARCHAR(15) NOT NULL
)";

if ($con->query($sql) === TRUE) {
    echo "Table customers created successfully";
} else {
    echo "Error creating table: " . $con->error;
}

$con->close();
?>