<?php

namespace EventHandlerAFactory\classes\behaviour\updates;

use EventHandlerAFactory\interface\behaviour\updates\CopyFieldToFieldInterface;
use EventHandlerAFactory\interface\behaviour\updates\CrossUpdatesInterface;
use EventHandlerAFactory\interface\behaviour\updates\UpdateFieldsInterface;
use EventHandlerAFactory\interface\behaviour\updates\UpdateStageInterface;

class CrossUpdatesFactory implements CrossUpdatesInterface
{
    public function copyFieldToField(): CopyFieldToFieldInterface
    {
        return new CopyFieldToField();
    }

    public function updateFields(): UpdateFieldsInterface
    {
        return new UpdateFields();
    }

    public function updateStage(): UpdateStageInterface
    {
        return new UpdateStage();
    }
}