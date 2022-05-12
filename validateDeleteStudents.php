<?php
session_start();
include 'config/config.php';


if (isset($_GET['id'])) {
    $sid = $_GET['id'];
    $sql = "DELETE FROM Student WHERE studentID = $sid";
    if ($con->query($sql)) {
        echo "<script>console.log('Done')</script>";
        header('Location: adminDashboard.php');
    }
}


//close connection
$con->close();
