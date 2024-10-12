<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
</head>
<body>
    <h2>Add New Employee</h2>
    <form action="insert_employee.php" method="post" enctype="multipart/form-data">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br><br>

        <label for="country_code">Country Code:</label>
        <select name="country_code" required>
        <option value="">--Select--</option>
                <option value="+90">+90</option>
                <option value="+91">+91</option>
                <option value="+92">+92</option>
                <option value="+93">+93</option>
                <option value="+94">+94</option>
                <option value="+95">+95</option>
                <option value="+1">+1</option>
                <option value="+20">+20</option>
                <option value="+31">+31</option>
                <option value="+40">+40</option>
                <option value="+44">+44</option>
                <option value="+45">+45</option>
            
        </select>

        <label for="mobile">Mobile Number:</label>
        <input type="number" name="mobile" required><br><br>

        <label for="address">Address:</label>
        <textarea name="address" rows="4" required></textarea><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label for="hobby">Hobby:</label>
        <input type="checkbox" name="hobby[]" value="Reading" required> Reading
        <input type="checkbox" name="hobby[]" value="Writing"> Writing
        <input type="checkbox" name="hobby[]" value="Playing"> Playing
        <input type="checkbox" name="hobby[]" value="Singing"> Singing<br><br>

        <label for="photo">Photo:</label>
        <input type="file" name="photo" accept="image/*" required><br><br>

        <input type="submit" value="Add Employee">
    </form>
</body>
</html>
