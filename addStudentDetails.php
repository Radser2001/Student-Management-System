<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/addDetails.css">
    <title>Add Student Details</title>
</head>

<body>
    <div class="form-container">
        <form action="validateAddStudentDetails.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name: </label><br>
            <input type="text" name="name" required><br>
            <label for="age">Age: </label><br>
            <input type="text" name="age" required><br>
            <label for="dob">Date of Birth: </label><br>
            <input type="text" name="dob" required><br>
            <label for="address">Address: </label><br>
            <input type="text" name="address" required><br>
            <label for="email">Email: </label><br>
            <input type="text" name="email" required><br>
            <label for="password">Password: </label><br>
            <input type="password" name="password" required><br>
            <label for="uploadImg" class="uploadBtn">Upload Image</label><br>
            <input type="file" name="uploadImg" id="uploadImg" required>
            <div class="button-container">
                <input type="submit" name="addBtn" class="button" value="Add">
            </div>
        </form>
    </div>

</body>

</html>