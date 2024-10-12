<?php
include 'connect.php';

$id = $_GET['id'];
$sql = "SELECT * FROM employee WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Employee</title>
</head>
<body>
    <h2>Update Employee</h2>
    <form action="update_employee.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $row['id'] ?>">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" value="<?= $row['first_name'] ?>" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" value="<?= $row['last_name'] ?>" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" value="<?= $row['email'] ?>" required><br><br>

        
        <label for="mobile">Mobile Number:</label>
        <select name="country_code" required>
        <option value="+90" <?= $row['country_code'] == '+90' ? 'selected' : '' ?>>+90</option>
<option value="+91" <?= $row['country_code'] == '+91' ? 'selected' : '' ?>>+91</option>
<option value="+92" <?= $row['country_code'] == '+92' ? 'selected' : '' ?>>+92</option>
<option value="+93" <?= $row['country_code'] == '+93' ? 'selected' : '' ?>>+93</option>
<option value="+94" <?= $row['country_code'] == '+94' ? 'selected' : '' ?>>+94</option>
<option value="+95" <?= $row['country_code'] == '+95' ? 'selected' : '' ?>>+95</option>
<option value="+1" <?= $row['country_code'] == '+1' ? 'selected' : '' ?>>+1</option>
<option value="+20" <?= $row['country_code'] == '+20' ? 'selected' : '' ?>>+20</option>
<option value="+31" <?= $row['country_code'] == '+31' ? 'selected' : '' ?>>+31</option>
<option value="+40" <?= $row['country_code'] == '+40' ? 'selected' : '' ?>>+40</option>
<option value="+44" <?= $row['country_code'] == '+44' ? 'selected' : '' ?>>+44</option>
<option value="+45" <?= $row['country_code'] == '+45' ? 'selected' : '' ?>>+45</option>

        </select>

        <input type="number" name="mobile" value="<?= $row['mobile'] ?>" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" rows="4" required><?= $row['address'] ?></textarea><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" <?= $row['gender'] == 'Male' ? 'checked' : '' ?>> Male
        <input type="radio" name="gender" value="Female" <?= $row['gender'] == 'Female' ? 'checked' : '' ?>> Female <br><br>

        <label for="hobby">Hobby:</label>
        <?php
        $hobbies = explode(', ', $row['hobby']);
        ?>
               <input type="checkbox" name="hobby[]" value="Reading" <?= in_array('Reading', $hobbies) ? 'checked' : '' ?>> Reading
        <input type="checkbox" name="hobby[]" value="Writing" <?= in_array('Writing', $hobbies) ? 'checked' : '' ?>> Writing
        <input type="checkbox" name="hobby[]" value="Playing" <?= in_array('Playing', $hobbies) ? 'checked' : '' ?>> Playing
        <input type="checkbox" name="hobby[]" value="Singing" <?= in_array('Singing', $hobbies) ? 'checked' : '' ?>> Singing
        <br> <br>
        <label for="photo">Current Photo:</label>
        <img src="uploads/<?= $row['photo'] ?>" width="100" alt="Employee Photo"><br><br>
        <label for="photo">Upload New Photo:</label>
        <input type="file" name="photo" accept="image/*"><br><br>

        <input type="submit" value="Update Employee">
    </form>
</body>
</html>
