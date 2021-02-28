<?php

require __DIR__ . '/../bootstrap.php';

use Telegram\Bot\Api;

$telegram = new Api('1637407889:AAFs8uRMW7_I_yUSzGejiQopQ3aioy8C_JE');

$response = $telegram->getMe();

$botId = $response->getId();
$firstName = $response->getFirstName();
$username = $response->getUsername();
