<?php

require_once __DIR__ . "/../model/History.php";

class HistoryFamilyController
{

    public function addHistory($orderId, $familyId, $status, $nameProduct, $email, $oldValue = null, $newValue = null,)
    {
        $historyModel = new History();
        return $historyModel->add($orderId, $familyId, $status, $oldValue, $newValue, $nameProduct, $email);
    }
    public function getByFamilyId($familyId)
    {
        $history = new History();

        return $history->getByFamilyId($familyId);
    }
}
