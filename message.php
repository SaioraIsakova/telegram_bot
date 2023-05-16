<?php
session_start();
require __DIR__ . '/vendor/autoload.php';

$task = $_POST['task'];
$deadline =  $_POST['deadline'];

$bot_api_key  = '5936889709:AAHPbMRGJERXcxsM_Ns0cPhZZtT5mfVHX7g';
$bot_username = 'New_bot';
$chat_id = 891425698;
$sendToTelegramm = "http://api.telegram.org/bot{$bot_api_key}/sendMessage?chat_id={$chat_id}&text={$task}{$task}%0A{$deadline}";
$telegram_response = file_get_contents($sendToTelegramm);
                      
$telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);
// while (true) {
//     $result = Longman\TelegramBot\Request::sendMessage([
//         'chat_id' => $chat_id,
//         'text'    => 'Hello from your bot!',
//     ]);
//     sleep(5);
// }
