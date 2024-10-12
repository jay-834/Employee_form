<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $country_code = $_POST['country_code'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $hobbies = implode(", ", $_POST['hobby']);
    
    $photo = $_FILES['photo']['name'];
    $photo_tmp = $_FILES['photo']['tmp_name'];
    $upload_dir = 'uploads/';
    $update_photo = "";

    if (!empty($photo)) {
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true);
        }
        
        $target_file = $upload_dir . basename($photo);

        if (move_uploaded_file($photo_tmp, $target_file)) {
            $update_photo = ", photo = '$photo'";
        } else {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }

    $sql = "UPDATE employee SET 
                first_name = '$first_name', 
                last_name = '$last_name', 
                email = '$email', 
                country_code = '$country_code', 
                mobile = '$mobile', 
                address = '$address', 
                gender = '$gender', 
                hobby = '$hobbies' 
                $update_photo 
            WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Employee updated successfully!";
        echo "<br><a href='get_employees.php'>Go back to Employee List</a>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
