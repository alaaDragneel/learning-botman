<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use App\Conversations\ExampleConversation;
use App\Http\Conversations\FuckingConversation;
use App\Http\Conversations\FuckMeConversation;

class BotManController extends Controller
{
    /**
     * Place your BotMan logic here.
     */
    public function handle()
    {
        $botman = app('botman');

        $botman->hears('.*(Hi|Hello|why).*', function ($bot) {
            // $bot->startConversation(new ExampleConversation());
            $bot->reply('You Are A Fucker');
        });

        $botman->listen();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function tinker()
    {
        return view('tinker');
    }

    /**
     * Loaded through routes/botman.php
     * @param  BotMan $bot
     */
    public function startConversation(BotMan $bot)
    {
        $bot->startConversation(new ExampleConversation());
    }

    public function startTalkConversation(BotMan $bot)
    {
        $bot->startConversation(new FuckingConversation());
    }

    public function startFuckingConversation(BotMan $bot)
    {
        $bot->startConversation(new FuckMeConversation());
    }
}

