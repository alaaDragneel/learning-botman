<?php

namespace App\Http\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Question;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;

class FuckMeConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $question = Question::create('Do You Want Me I\'m Cheeper Than Bondoq Mother ;) ')
            ->fallback('Unable to ask question')
            ->callbackId('ask_reason')
            ->addButtons([
                Button::create('Yes ;)')->value('yes'),
                Button::create('No it\'s Haram')->value('no'),
            ]);

        $this->say('Fuck You Yala');
        return $this->ask($question, function (Answer $answer) {
            if ($answer->getText() == 'yes') {
                return $this->say('So Today You Are My Baby ;)');
            } else {
                return $this->say('Ok "Fuck" You Let Bondoq Mother Be Useful');
            }
        });
    }
}
