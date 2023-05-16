#!/usr/bin/env php
<?php

require __DIR__ . '/vendor/autoload.php';

$bot_api_key  = '5936889709:AAHPbMRGJERXcxsM_Ns0cPhZZtT5mfVHX7g';
$bot_username = 'New_bot';

try {
    // Создание объекта Telegram API
    $telegram = new Longman\TelegramBot\Telegram($bot_api_key, $bot_username);

    $telegram->useGetUpdatesWithoutDatabase();

    // Обработка запроса getUpdates от Telegram
    $a = $telegram->handleGetUpdates();
    
    $result = $a->getResult();
    foreach ($result as $update) {
        $message = $update->getMessage();
        var_dump($message->getChat());
    }
}


