<?php


namespace Modules\SMS\SMS;

use NotificationChannels\ClickSend\ClickSendMessage;
class SendMessage extends ClickSendMessage
{

    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    public function delay($delay)
    {
    }

    public function content($content)
    {

    }
    public function from($from)
    {

    }
}
