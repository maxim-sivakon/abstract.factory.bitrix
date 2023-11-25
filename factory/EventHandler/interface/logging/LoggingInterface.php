<?php

namespace EventHandler\interface\logging;

interface LoggingInterface
{
    public function SaveLog(string $message, array $additional): bool;
}