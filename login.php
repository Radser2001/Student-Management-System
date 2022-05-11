<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Log in</title>
</head>

<body>
    <?php
    include 'include/header.php';
    ?>

    <div class="form-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="email">Email: </label>
            <input type="text" name="email">
            <label for="password">Password: </label>
            <input type="password" name="password">
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