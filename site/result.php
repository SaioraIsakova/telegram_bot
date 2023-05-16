<?php
require_once 'db.php';
session_start();

$login = $_POST['login'];
$email = $_POST['email'];
$pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);

$stmt = $pdo->prepare("
       SELECT COUNT(*) 
       FROM 
       `users` 
       WHERE 
       login = :login
");

$result = $stmt->execute(
    [
        ':login' => $login
    ]
);
$count = $stmt->fetchColumn();
if ($count > 0) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header("Location: /site/login.php");
    exit;
}


$stmt = $pdo->prepare("
    INSERT INTO
        `users` (
        `login`,
        `email`,
        `pass`
           
        ) VALUES (
         :login,
         :email,
         :pass
        )
");


$result = $stmt->execute([
    ':login' => $login,
    ':email' => $email,
    ':pass' => $pass

]);
if ($result) {

    
    echo 'Регистрация прошла успешна';
    header("Location: /site/autorization.php");
    }


?>

