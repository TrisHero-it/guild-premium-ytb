<?php

require_once "db.php";
class family
{
    function getAll()
    {
        $db = new db();
        $query = "SELECT * FROM family ORDER BY id DESC";
        $results = $db->getData($query);
        
        // Decode JSON members if exists
        if (is_array($results)) {
            foreach ($results as &$row) {
                $row = $this->decodeMemberData($row);
            }
        }
        
        return $results;
    }
    
    /**
     * Decode member data từ JSON nếu có
     */
    private function decodeMemberData($row)
    {
        $memberFields = ['member1', 'member2', 'member3', 'member4', 'member5'];
        foreach ($memberFields as $field) {
            if (!empty($row[$field])) {
                $decoded = json_decode($row[$field], true);
                if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                    $row[$field . '_decoded'] = $decoded;
                    $row[$field . '_is_json'] = true;
                } else {
                    $row[$field . '_decoded'] = null;
                    $row[$field . '_is_json'] = false;
                }
            }
        }
        return $row;
    }

    function getById($id)
    {
        $db = new db();
        $conn = $db->getConnect();
        $query = "SELECT * FROM family WHERE id = ? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        
        // Decode JSON members if exists
        if ($result) {
            $result = $this->decodeMemberData($result);
        }
        
        return $result;
    }

    function add($data)
    {
        $db = new db();
        $query = "INSERT INTO family (
            form, payment_at, email, number_phone, number_bank, name_bank, 
            user, bill_payment, status, pay_due_date, note, 
            member1, member2, member3, member4, member5
        ) VALUES (
            :form, :payment_at, :email, :number_phone, :number_bank, :name_bank, 
            :user, :bill_payment, :status, :pay_due_date, :note, 
            :member1, :member2, :member3, :member4, :member5
        )";

        $params = [
            ':form' => $data['form'],
            ':payment_at' => $data['payment_at'] ?? null,
            ':email' => $data['email'],
            ':number_phone' => $data['number_phone'] ?? null,
            ':number_bank' => $data['number_bank'],
            ':name_bank' => $data['name_bank'],
            ':user' => $data['user'],
            ':bill_payment' => $data['bill_payment'] ?? null,
            ':status' => $data['status'],
            ':pay_due_date' => $data['pay_due_date'],
            ':note' => $data['note'] ?? null,
            ':member1' => $data['member1'] ?? null,
            ':member2' => $data['member2'] ?? null,
            ':member3' => $data['member3'] ?? null,
            ':member4' => $data['member4'] ?? null,
            ':member5' => $data['member5'] ?? null
        ];

        try {
            $conn = $db->getConnect();
            $stmt = $conn->prepare($query);
            $result = $stmt->execute($params);
            if ($result) {
                return $conn->lastInsertId();
            }
            return false;
        } catch (Exception $e) {
            throw new Exception("Lỗi khi thêm family: " . $e->getMessage());
        }
    }

    function update($id, $data)
    {
        $db = new db();
        $query = "UPDATE family SET 
            form = :form, 
            payment_at = :payment_at, 
            email = :email, 
            number_phone = :number_phone, 
            number_bank = :number_bank, 
            name_bank = :name_bank, 
            user = :user, 
            bill_payment = :bill_payment, 
            status = :status, 
            pay_due_date = :pay_due_date, 
            note = :note, 
            member1 = :member1, 
            member2 = :member2, 
            member3 = :member3, 
            member4 = :member4, 
            member5 = :member5
        WHERE id = :id";

        $params = [
            ':id' => $id,
            ':form' => $data['form'],
            ':payment_at' => $data['payment_at'] ?? null,
            ':email' => $data['email'],
            ':number_phone' => $data['number_phone'] ?? null,
            ':number_bank' => $data['number_bank'],
            ':name_bank' => $data['name_bank'],
            ':user' => $data['user'],
            ':bill_payment' => $data['bill_payment'] ?? null,
            ':status' => $data['status'],
            ':pay_due_date' => $data['pay_due_date'],
            ':note' => $data['note'] ?? null,
            ':member1' => $data['member1'] ?? null,
            ':member2' => $data['member2'] ?? null,
            ':member3' => $data['member3'] ?? null,
            ':member4' => $data['member4'] ?? null,
            ':member5' => $data['member5'] ?? null
        ];

        try {
            $conn = $db->getConnect();
            $stmt = $conn->prepare($query);
            return $stmt->execute($params);
        } catch (Exception $e) {
            throw new Exception("Lỗi khi cập nhật family: " . $e->getMessage());
        }
    }

    function delete($id)
    {
        $db = new db();
        $query = "DELETE FROM family WHERE id = :id";
        $params = [':id' => $id];

        try {
            $conn = $db->getConnect();
            $stmt = $conn->prepare($query);
            return $stmt->execute($params);
        } catch (Exception $e) {
            throw new Exception("Lỗi khi xóa family: " . $e->getMessage());
        }
    }
}