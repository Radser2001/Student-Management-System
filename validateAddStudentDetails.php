<?php
include 'config/config.php';

if (isset($_POST['addBtn'])) {
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);
    $dob = filter_input(INPUT_POST, "dob", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $target_dir = "images/student/";
    $target_file = $target_dir . basename($_FILES["uploadImg"]["name"]);

    if (isset($_FILES["uploadImg"])) {
        if (move_uploaded_file($_FILES["uploadImg"]["tmp_name"], $target_file)) {
            echo "<script>console.log('Done')</script>";
        } else {
            echo "<script>console.log('Error')</script>";
        }
    } else {
        echo "<script>console.log('No file')</script>";
    }

    $sql = "INSERT INTO Student (studentName, studentAge, studentAddress, studentImgPath, studentDOB, studentEmail, studentPassword) VALUES ('$name', $age, '$address', '$target_file', '$dob', '$email', '$password')";

    if ($con->query($sql)) {
        echo "<script>console.log('Done')</script>";
        header('Location: adminDashboard.php');
    }
}

//close connection
$con->close();
