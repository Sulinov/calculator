<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello! What\'s up?');
});

/*$botman->hears('What', function ($bot) {
    $bot->reply('Hello! What\'s up?');
});*/
$botman->hears('Start conversation', BotManController::class.'@startConversation');
