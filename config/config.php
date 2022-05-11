<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "Student-Management-System";

//create connection
$con = new mysqli($servername, $username, $password, $database);

//check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

// echo "connected";
