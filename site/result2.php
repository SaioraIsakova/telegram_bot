<?php
require_once 'db.php';
session_start();

$login = $_POST['login'];
$pass = $_POST['pass'];


$stmt = $pdo->prepare("
    SELECT 
        `users`.`pass`,
        `users`.`id`
    FROM
        `users`
    WHERE
         `login`= :login   
");


$result = $stmt->execute(
    [
        ':login' => $login
    ]
);


if ($result) {
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($row) {
        if (password_verify($pass, $row['pass'])) {
            $_SESSION['id'] = $row['id'];
            header("Location: /site/task.php");
            exit;
        } else {
            $_SESSION['message2'] = 'Пароль не совпадает';
            header("Location: /site/autorization.php");
        }
    } else {
        $_SESSION['message3'] = 'Ввели неверный логин';
        header("Location: /site/autorization.php");
    }
}

