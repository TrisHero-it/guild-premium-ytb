<?php

require_once "db.php";

class History
{

    public function getAll($id)
    {
        $db = new db();
        $query = "SELECT * FROM history_joining_family WHERE family_id = ? ORDER BY id DESC";
        return $db->getData($query);
    }

    public function add($orderId, $familyId, $status, $nameProduct, $email, $oldValue = null, $newValue = null)
    {
        $db = new db();
        $query = "INSERT INTO history_joining_family (order_id, family_id, status, old_value, new_value, name_product, email) VALUES (?, ?, ?, ?, ?, ?, ?)";
        return $db->execute($query, [$orderId, $familyId, $status, $oldValue, $newValue, $nameProduct, $email]);
    }

    public function getByFamilyId($familyId)
{
    $db = new db();

    $sql = "SELECT *
            FROM history_joining_family
            WHERE family_id = $familyId
            ORDER BY created_at DESC";

    return $db->getData($sql);
}
}
