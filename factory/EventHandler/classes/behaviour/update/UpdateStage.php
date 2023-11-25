<?php

namespace EventHandler\classes\behaviour\update;

use EventHandler\interface\behaviour\UpdateDealInterface;

class UpdateStage implements UpdateDealInterface
{
    public function Builder(int $ID, array $newValues): bool
    {
        // TODO: Implement SendMessage() method.
        return false;
    }
}