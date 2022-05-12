<?php
session_start();
include 'config/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/deleteStudents.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>Document</title>
</head>

<body>

    <form class="search-name" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <input type="text" name="name" placeholder="Enter the name....">
        <input type="submit" name="submit" class="search button" value="Search">
    </form>
    <div class="table-container">

        <?php
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $sql = "SELECT * FROM Student WHERE studentName LIKE '%$name%'";
            $result = $con->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $sname = $row['studentName'];
                    $age = $row['studentAge'];
                    $address = $row['studentAddress'];
                    $dob = $row['studentDOB'];
                    $email = $row['studentEmail'];
                    $src = $row['studentImgPath'];
                    $sidOld = $row['studentID'];
                    echo "<table>";
                    echo "<tr>";
                    echo "    <th>Name </th>";
                    echo "    <th>Age </th>";
                    echo "    <th>Date of Birth </th>";
                    echo "    <th>Address </th>";
                    echo "    <th>Email </th>";
                    echo "    <th>Photo</th>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "    <td>$sname</td>";
                    echo "    <td>$age</td>";
                    echo "    <td>$address</td>";
                    echo "    <td>$dob</td>";
                    echo "    <td>$email</td>";
                    echo "    <td><img class='stdImg' src= " . $src . "></td>";
                    echo "</tr>";
                    echo "</table>";
                }
            } else {
                echo "<h2 class='error'>No results for " . $name . "</h2>";
            }
        }
        ?>

        <h2 class="heading">Edit Details</h2>
        <div class="form-container">
            <form action="validateEditStudentDetails.php?sidOld=<?php echo $sidOld ?>" method="POST" enctype="multipart/form-data">
                <input type="text" name="SID" placeholder="StudentID" required><br>
                <input type="text" name="name" placeholder="Name" required><br>
                <input type="text" name="age" placeholder="Age" required><br>
                <input type="text" name="dob" placeholder="Date of Birth" required><br>
                <input type="text" name="address" placeholder="Address" required><br>
                <input type="text" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
                <label for="uploadImg" class="uploadBtn">Upload Image</label><br>
                <input type="file" name="uploadImg" id="uploadImg" required>
                <div class="button-container">
                    <input type="submit" name="editBtn" class="button" value="Edit">
                </div>
            </form>
        </div>


</body>

</html>