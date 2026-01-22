<?php

require_once "db.php";
class family
{
    function getAll()
    {
        $result = $this->getBySearch('', 1, 0);
        return $result['items'];
    }

    /**
     * Lấy danh sách family có tìm kiếm theo order_code (trong member) và phân trang.
     * @param string $orderCode Mã đơn hàng cần tìm (trong member1..member5 JSON)
     * @param int $page Trang hiện tại (bắt đầu 1)
     * @param int $perPage Số bản ghi mỗi trang. 0 = không phân trang (lấy hết)
     * @return array ['items' => array, 'total' => int]
     */
    function getBySearch($orderCode = '', $page = 1, $perPage = 20)
    {
        $db = new db();
        $conn = $db->getConnect();

        $orderCode = trim($orderCode);
        $hasSearch = $orderCode !== '';

        // WHERE: tìm order_code trong JSON của member1..member5 (MySQL JSON_EXTRACT)
        $whereSql = '';
        $params = [];
        if ($hasSearch) {
            $term = '%' . $orderCode . '%';
            $whereSql = " WHERE (
                JSON_UNQUOTE(JSON_EXTRACT(member1, '$.order_code')) LIKE :term1
                OR JSON_UNQUOTE(JSON_EXTRACT(member2, '$.order_code')) LIKE :term2
                OR JSON_UNQUOTE(JSON_EXTRACT(member3, '$.order_code')) LIKE :term3
                OR JSON_UNQUOTE(JSON_EXTRACT(member4, '$.order_code')) LIKE :term4
                OR JSON_UNQUOTE(JSON_EXTRACT(member5, '$.order_code')) LIKE :term5
            )";
            $params[':term1'] = $term;
            $params[':term2'] = $term;
            $params[':term3'] = $term;
            $params[':term4'] = $term;
            $params[':term5'] = $term;
        }

        // Đếm tổng số bản ghi
        $countQuery = "SELECT COUNT(*) FROM family" . $whereSql;
        $stmtCount = $conn->prepare($countQuery);
        $stmtCount->execute($params);
        $total = (int) $stmtCount->fetchColumn();

        // Lấy danh sách có ORDER BY và LIMIT/OFFSET
        $query = "SELECT * FROM family" . $whereSql . " ORDER BY id DESC";
        if ($perPage > 0) {
            $offset = max(0, ($page - 1) * $perPage);
            $query .= " LIMIT " . (int) $perPage . " OFFSET " . (int) $offset;
        }
        $stmt = $conn->prepare($query);
        $stmt->execute($params);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (is_array($results)) {
            foreach ($results as &$row) {
                $row = $this->decodeMemberData($row);
            }
        }

        return ['items' => $results, 'total' => $total];
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