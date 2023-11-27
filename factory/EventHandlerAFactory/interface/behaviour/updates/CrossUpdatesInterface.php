<?php

namespace EventHandlerAFactory\interface\behaviour\updates;

interface CrossUpdatesInterface
{
    public function copyFieldToField(): CopyFieldToFieldInterface;

    public function updateFields(): UpdateFieldsInterface;

    public function updateStage(): UpdateStageInterface;
}