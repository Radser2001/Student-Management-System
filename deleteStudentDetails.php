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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css//deleteStudents.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin</title>
</head>

<body>
    <div class="table-container">
        <table>
            <tr>
                <th>Name </th>
                <th>Age </th>
                <th>Date of Birth </th>
                <th>Address </th>
                <th>Email </th>
                <th>Photo</th>
                <th>Delete</th>
            </tr>
            <?php
            // include 'include/header.php';

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
                    $sid = $row['studentID'];
                    $_SESSION['Asid'] = $sid;
                    echo "<tr>";
                    echo "    <td>$name</td>";
                    echo "    <td>$age</td>";
                    echo "    <td>$address</td>";
                    echo "    <td>$dob</td>";
                    echo "    <td>$email</td>";
                    echo "    <td><img class='stdImg' src= " . $src . "></td>";
                    echo '    <td><button type="submit" name="deleteBtn"><a href="validateDeleteStudents.php?id=' . $sid . '"><i class="fa-solid fa-trash"></i></a></button></td>';
                    echo "</tr>";
                }
            }
            ?>



        </table>
    </div>
</body>

</html>