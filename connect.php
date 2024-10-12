<?php 
$hostname="localhost";
$username= "root";
$password= "";
$database="employees";

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die('Connection Failure: ' . $conn->connect_error);
}
else{
   // echo'connection Sucessfully';
}

?>