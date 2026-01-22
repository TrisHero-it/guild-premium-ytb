<?php

require_once "db.php";

class GuildCollaborators
{
    function getAll()
    {
        $db = new db();
        $query = "SELECT * FROM guild_collaborators ORDER BY id DESC";
        return $db->getData($query);
    }

    function getById($id)
    {
        $db = new db();
        $conn = $db->getConnect();
        $query = "SELECT * FROM guild_collaborators WHERE id = ? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function add($data)
    {
        $db = new db();
        $query = "INSERT INTO guild_collaborators (content, status) VALUES (:content, :status)";

        $params = [
            ':content' => $data['content'],
            ':status' => $data['status'] ?? 'active'
        ];

        try {
            return $db->insert($query, $params);
        } catch (Exception $e) {
            throw new Exception("Lỗi khi thêm collaborator: " . $e->getMessage());
        }
    }

    function update($id, $data)
    {
        $db = new db();
        $query = "UPDATE guild_collaborators SET 
            content = :content, 
            status = :status
        WHERE id = :id";

        $params = [
            ':id' => $id,
            ':content' => $data['content'],
            ':status' => $data['status'] ?? 'active'
        ];

        try {
            $conn = $db->getConnect();
            $stmt = $conn->prepare($query);
            return $stmt->execute($params);
        } catch (Exception $e) {
            throw new Exception("Lỗi khi cập nhật collaborator: " . $e->getMessage());
        }
    }

    function delete($id)
    {
        $db = new db();
        $query = "DELETE FROM guild_collaborators WHERE id = :id";
        $params = [':id' => $id];

        try {
            $conn = $db->getConnect();
            $stmt = $conn->prepare($query);
            return $stmt->execute($params);
        } catch (Exception $e) {
            throw new Exception("Lỗi khi xóa collaborator: " . $e->getMessage());
        }
    }
}
