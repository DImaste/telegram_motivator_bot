<?php 

require_once "vendor/autoload.php";

$api = '822999589:AAHE3ZOiQhnNj71PSUgpyKLm9yYBUrUE82Y';

$bot = new \TelegramBot\Api\BotApi($api);

$messageText = "Hello!";

$bot->sendMessage($message->getChat()->getId(), $messageText);

?>