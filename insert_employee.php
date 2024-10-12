<?php
include 'connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

    if (!is_dir($upload_dir)) {
        mkdir($upload_dir, 0777, true); 
    }

    $target_file = $upload_dir . basename($photo);

    if (move_uploaded_file($photo_tmp, $target_file)) {
        $sql = "INSERT INTO employee (first_name, last_name, email, country_code, mobile, address, gender, hobby, photo, created_date,update_date)
                VALUES ('$first_name', '$last_name', '$email', '$country_code', '$mobile', '$address', '$gender', '$hobbies', '$photo', now(), now())";

        if (mysqli_query($conn, $sql)) {
            echo "New employee added successfully!";
            echo '<a href="get_employees.php"> Back to Home </a>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    mysqli_close($conn);
}
?>