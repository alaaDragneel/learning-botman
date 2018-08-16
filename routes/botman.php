<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
$botman->hears('Start conversation', BotManController::class.'@startConversation');
$botman->hears('Can We Talk', BotManController::class.'@startTalkConversation');
$botman->hears('.*(a7a|sexy).*', BotManController::class.'@startFuckingConversation');
