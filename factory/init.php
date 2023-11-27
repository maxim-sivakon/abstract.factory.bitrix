<?php

use EventHandlerAFactory\classes\behaviour\updates\CrossUpdatesFactory;
use EventHandlerAFactory\interface\behaviour\updates\CrossUpdatesInterface;

const EVENT_HANDLER = 'UPDATE';

$crossUpdatesFactory = null;

switch (EVENT_HANDLER) {
    case 'UPDATE':
        $crossUpdatesFactory = new CrossUpdatesFactory();
        break;
}

if (!$crossUpdatesFactory instanceof CrossUpdatesInterface) {
    throw new \Exception("Failed to create a factory!");
}

$copyFieldToField = $crossUpdatesFactory->copyFieldToField();
$updateFields = $crossUpdatesFactory->updateFields();
$updateStage = $crossUpdatesFactory->updateStage();

function copyFieldToField(&$arFields)
{
    global $crossUpdatesFactory;
    return $crossUpdatesFactory->builder($arFields);
}

function updateFields(&$arFields)
{
    global $crossUpdatesFactory;
    return $crossUpdatesFactory->builder($arFields);
}

function updateStage(&$arFields)
{
    global $crossUpdatesFactory;
    return $crossUpdatesFactory->builder($arFields);
}

addEventHandler('crm', 'OnBeforeCrmDealUpdate', 'copyFieldToField');
addEventHandler('crm', 'OnBeforeCrmDealUpdate', 'updateFields');
addEventHandler('crm', 'OnBeforeCrmDealUpdate', 'updateStage');

// addEventHandler('crm', 'OnAfterCrmDealAdd', ["TelegramBotCreateDeal", "startCreate"]);
