<?php
session_start();

if (isset($_SESSION['message'])) {
    echo "<p>" . $_SESSION['message'] . "</p>";
    unset($_SESSION['message']);
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Зарегистрироваться</title>
</head>

<body>
    <div class="container">
        <form action='/site/result.php' method='POST'>

            <p>Login: <input type="text" name="login" id="" required> <samp style="color:red">*</samp></p>
            <p>Email: <input type="email" name="email" id="" required><samp style="color:red">*</samp></p>
            <p>Password: <input type="password" name="pass" id="" required><samp style="color:red">*</samp></p>
            <p>Confirm password: <input type="password" name="pass_rep" id="" required><samp style="color:red">*</samp></p>
           
                <a href="/site/autorization.php" class="custom-btn btn-6" name="doGo">
                    <span>Enter</span>
                </a>
                <button class="custom-btn btn-6" type="submit" name="doGo">
                    <span>Login</span>
                </button>
        

        </form>
    </div>
</body>