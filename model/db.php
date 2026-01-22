<?php
require_once "env.php";
// tạo kết nối từ project php sang mysql
class db
{
    function getConnect()
    {
        $connect = new PDO(
            "mysql:host=" . DBHOST
                . ";dbname=" . DBNAME
                . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES " . DBCHARSET . " COLLATE utf8mb4_unicode_ci"
            ]
        );
        return $connect;
    }

    function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }

    function execute($query, $params = [])
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        return $stmt->execute($params);
    }

    function insert($query, $params = [])
    {
        $conn = $this->getConnect();
        $stmt = $conn->prepare($query);
        if ($stmt->execute($params)) {
            return $conn->lastInsertId();
        }
        return false;
    }
}
