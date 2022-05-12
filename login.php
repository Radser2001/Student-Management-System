<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/studentProfile.css">
    <title>Log in</title>
</head>

<body>
    <?php
    include 'include/header.php';
    ?>

    <div class="form-container">
        <form action="checkLogin.php" method="POST">
            <h1 class="login">Log in</h1>
            <?php
            if (isset($_GET["error"]) && $_GET["error"] == "incorrectPassword") {
                echo "<p class='error'>Incorrect Password. Please try again</p>";
            }
            if (isset($_GET["error"]) && $_GET["error"] == "invalidEmail") {
                echo "<p class='error'>Invalid Email. Please try again.</p>";
            }
            ?>
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" maxlength="20">
            <div class="btn-row">
                <input type="submit" name="studentLogin" class="button" value="Student">
                <input type="submit" name="adminLogin" class="button" value="Admin">
            </div>
        </form>
    </div>


    <footer>
        <?php
        include 'include/footer.php';
        ?>
    </footer>
</body>

</html>