<?php

namespace EventHandlerAFactory\classes\behaviour\updates;

use EventHandlerAFactory\interface\behaviour\updates\UpdateStageInterface;

class UpdateStage implements UpdateStageInterface
{
    /**
     * @param  int  $dealID
     * @param  array  $arNewChanges
     * @return bool
     */
    public function builder(array $arNewChanges): bool
    {
        // TODO: Implement builder() method.

        return false;
    }
}