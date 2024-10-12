<?php 

include 'connect.php';

$sql = "select * from employee";
$result = mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
echo"<table border='1'>
    <tr>
        <td>ID</td>
        <td>First Name</td>
        <td>Last Name</td>
        <td> Email </td>
        <td> mobile </td>
        <td> Address</td>
        <td> Gender</td>
        <td> hobby </td>
        <td>Photo</td>
        <td> Created date </td>
        <td> Updated date </td>
        <td> Action </td>
        
    </tr>";

    while ($row = mysqli_fetch_assoc($result)){
        echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['first_name']}</td>
        <td>{$row['last_name']}</td>
        <td>{$row['email']}</td>
        <td>{$row['country_code']} " . "-" . " {$row['mobile']}</td>
        <td>{$row['address']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['hobby']}</td>
        <td><img src='uploads/{$row['photo']}' alt='Employee Photo' width='100'></td>
        <td>{$row['created_date']}</td>
        <td>{$row['update_date']}</td>
        <td> <a href='update_form.php?id={$row['id']}'> Edit </a>
        <a href='delete_employee.php?id={$row['id']}' onclick='return confirm('are you sure want to delete');'> Delete </a>
         </td>
        
    </tr>";
    }
echo"</table>";
echo "<a href='Employee_form.php'>Form</a>";

}
else{
    echo "No data Found";
}

mysqli_close($conn);    
?>