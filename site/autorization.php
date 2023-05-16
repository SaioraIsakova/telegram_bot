<?php
session_start();

if (isset($_SESSION['message2'])) {
    if (isset($_SESSION['message2'])) {
        echo "<p>" . $_SESSION['message2'] . "</p>";
        unset($_SESSION['message2']); 
    }
   }

if (isset($_SESSION['message3'])) {
    echo "<p>" . $_SESSION['message3'] . "</p>";
    unset($_SESSION['message3']); 
}

?>


<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Войти</title>
</head>

<body>
    <div class="container">
        <form action="/site/result2.php" method="POST">
            <p>Login: <input type="text" name="login" id="" required></p>
            <p>Password: <input type="password" name="pass" id="" required></p>
       
            <button class="custom-btn btn-6" type="submit" name="doGo">
            <span>Enter</span>
            </button>
        </form>
    </div>
</body>

</html>