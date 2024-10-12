<?php 
include 'connect.php';

$id = $_GET['id'];
$sql = "DELETE FROM employee WHERE id = $id";

if (mysqli_query($conn,$sql)) {
    echo "Employee Deleted Succesfully ";
    echo '<a href="get_employees.php">Back to List</a>';
}
else {
    echo "Error" . $sql . " " . mysqli_error( $conn );
}
    mysqli_close($conn);    
?>