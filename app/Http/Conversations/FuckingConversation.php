<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;

class FuckingConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Sure');
        return $this->ask('What Is Your Name', function (Answer $answer) {
            $this->say('Ok "Fuck" You "' . $answer->getText() . '" Who The Hell Are You To Talk To Me');
        });

    }
}
