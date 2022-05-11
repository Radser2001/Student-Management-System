<?php
session_start();
include 'config/config.php';

if (isset($_POST["adminLogin"])) {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM Admin WHERE adminEmail = '$email'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($password == $row["adminPassword"]) {
                header("Location: adminDashboard.php");
            } else {
                header("Location: login.php?error=incorrectPassword");
            }
        }
    } else {
        header("Location: login.php?error=invalidEmail");
    }
}

if (isset($_POST["studentLogin"])) {
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $sql = "SELECT * FROM Student WHERE studentEmail = '$email'";

    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            if ($password == $row["studentPassword"]) {
                header("Location: studentProfile.php");
            } else {
                header("Location: login.php?error=incorrectPassword");
            }
        }
    } else {
        header("Location: login.php?error=invalidEmail");
    }
}
