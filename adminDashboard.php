<?php
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adminDashboard.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>

<body>
    <!--header-->
    <header>
        <nav class="navbar-admin">
            <div class="name">
                <h2>Student-Management-System</h2>
            </div>
            <button class="button"><a href="logout.php">Log Out</a></button>
        </nav>
    </header>
    <div class="table-container">
        <table>
            <tr>
                <th>Name </th>
                <th>Age </th>
                <th>Date of Birth </th>
                <th>Address </th>
                <th>Email </th>
                <th>Photo</th>
            </tr>
            <?php
            

            $sql = "SELECT * FROM Student";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {
                    $name = $row['studentName'];
                    $age = $row['studentAge'];
                    $address = $row['studentAddress'];
                    $dob = $row['studentDOB'];
                    $email = $row['studentEmail'];
                    $src = $row['studentImgPath'];
                    echo "<tr>";
                    echo "    <td>$name</td>";
                    echo "    <td>$age</td>";
                    echo "    <td>$address</td>";
                    echo "    <td>$dob</td>";
                    echo "    <td>$email</td>";
                    echo "    <td><img class='stdImg' src= " . $src . "></td>";
                    echo "</tr>";
                }
            }
            ?>



        </table>




        <div class="button-container">
            <button class="button"><a href="addStudentDetails.php">Add</a></button>
            <button class="button"> <a href="editStudentDetails.php">Edit</a> </button>
            <button class="button"><a href="deleteStudentDetails.php">Delete</a></button>
        </div>

    </div>

    <!--footer-->
    <div class="footer">
        <p class="footer-text">Copyright &copy; 2022 by Radser2001</p>
    </div>

</body>

</html>