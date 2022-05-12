<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/studentProfile.css">
    <link rel="stylesheet" href="css/style.css">
    <title>My Profile</title>
</head>

<body>
    <?php
    include 'include/header.php';
    ?>

    <?php
    $sid = $_SESSION['sid'];
    $name = $_SESSION['sname'];
    $age = $_SESSION['sage'];
    $address = $_SESSION['saddress'];
    $imageSrc = $_SESSION['simage'];
    $dob = $_SESSION['sdob'];
    $email = $_SESSION['semail'];
    $pwd = $_SESSION['spassword'];

    if (isset($_GET['sid']) && $_GET['sid'] = $sid) {
        echo "<div class='student-details'>";
        echo '    <img class="avatar" src="' . $imageSrc . '" alt="">';
        echo "    <p>Name: <span>" . $name . "</span></p>";
        echo "    <p>Age: <span>" . $age . "</span> </p>";
        echo "    <p>Address: <span>" . $address . "</span></p>";
        echo "    <p>Date of Birth: <span>" . $dob . "</span></p>";
        echo "    <p>Email: <span>" . $email . "</span></p>";
        echo "</div>";
    }
    ?>


    <div class="button-container">
        <button class="button"><a href="logout.php">Log Out</a></button>
    </div>

    <div class="footer">
        <p class="footer-text">Copyright &copy; 2022 by Rader2001</p>
    </div>
</body>

</html>