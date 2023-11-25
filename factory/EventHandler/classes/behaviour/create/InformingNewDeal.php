<?php

namespace EventHandler\classes\behaviour\create;

use EventHandler\interface\informing\InformingInterface;

class InformingNewDeal implements InformingInterface
{

    public function SendMessage(string $message, array $recipient): bool
    {
        // TODO: Implement SendMessage() method.
        return false;
    }
}