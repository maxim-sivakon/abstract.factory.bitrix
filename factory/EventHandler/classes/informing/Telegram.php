<?php

namespace EventHandler\classes\informing;

use EventHandler\interface\informing\InformingInterface;

class Telegram implements InformingInterface
{
    public function SendMessage(string $message, array $recipient): bool
    {
        // TODO: Implement SendMessage() method.
        return false;
    }
}