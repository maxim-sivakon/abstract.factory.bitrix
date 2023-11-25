<?php

namespace EventHandler\classes\logging;

use EventHandler\interface\logging\LoggingInterface;

class Highload implements LoggingInterface
{
    public function SaveLog(string $message, array $additional): bool
    {
        // TODO: Implement SendMessage() method.
        return false;
    }
}