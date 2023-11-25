<?php

namespace EventHandler\interface\behaviour;

interface UpdateDealInterface
{
    public function Builder(int $ID, array $newValues): bool;
}