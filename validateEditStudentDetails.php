<?php
include 'config/config.php';

if (isset($_POST['editBtn'])) {
    $sidOld = $_GET['sidOld'];

    $SID = filter_input(INPUT_POST, "SID", FILTER_SANITIZE_SPECIAL_CHARS);
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

    $sql = "UPDATE Student SET studentID = $SID, studentName = '$name', studentAge = $age, studentAddress = '$address', studentImgPath = '$target_file', studentDOB = $dob, studentEmail = '$email', studentPassword = '$password' WHERE studentID = $sidOld";

    if ($con->query($sql)) {
        echo "fail";
        header('Location: adminDashboard.php');
    } else {
        echo "pass";
    }
}

//close connection
$con->close();
