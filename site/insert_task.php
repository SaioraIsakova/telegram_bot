<?php
session_start();
require_once 'db.php';
require __DIR__ . '/vendor/autoload.php';

$task = $_POST['task'];
$deadline =  $_POST['deadline'];

$result = false;
if (isset($_SESSION['id'])) {
    $clientId = $_SESSION['id'];
    // echo "Client ID: " . $clientId; 
    if (isset($_POST['task']) && isset($_POST['deadline'])) {
        
        
        $task = $_POST['task'];
        $deadline = $_POST['deadline'];
        


        $stmt = $pdo->prepare("
            INSERT INTO
               `task` (
               `id_client`,
               `task`,
               `deadline`
           
            ) VALUES (
               :id_client,
               :task,
               :deadline
            )
        ");



        $result = $stmt->execute([
            ':id_client' => $clientId,
            ':task' => $task,
            ':deadline' => $deadline

        ]);
    }
}

if ($result) {

    echo 'Задание отправлено успешно';
   
    
}



$bot_api_key  = '5936889709:AAHPbMRGJERXcxsM_Ns0cPhZZtT5mfVHX7g';
$bot_username = 'New_bot';
$chat_id = 891425698;
$sendToTelegramm = "http://api.telegram.org/bot{$bot_api_key}/sendMessage?chat_id={$chat_id}&text={$task}{$task}%0A{$deadline}";
$telegram_response = file_get_contents($sendToTelegramm);
                      

