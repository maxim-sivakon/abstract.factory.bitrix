<?php

namespace EventHandlerAFactory\interface\behaviour\updates;

interface CopyFieldToFieldInterface
{
    /**
     * @param  int  $dealID
     * @param  array  $arNewChanges
     * @return bool
     */
    public function builder(array $arNewChanges): bool;
}