<?php

namespace EventHandler\interface\informing;

interface InformingInterface
{
    public function SendMessage(string $message, array $recipient): bool;
}