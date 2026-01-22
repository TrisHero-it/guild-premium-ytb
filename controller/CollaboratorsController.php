<?php

require_once __DIR__ . "/../model/GuildCollaborators.php";
require_once __DIR__ . "/../model/db.php";

class CollaboratorsController
{
    private $collaboratorsModel;

    public function __construct()
    {
        $this->collaboratorsModel = new GuildCollaborators();
    }

    public function getAll()
    {
        $collaborators = $this->collaboratorsModel->getAll();
        return $collaborators;
    }

    public function add()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /?act=collaborators&sub=add");
        }

        // Lấy dữ liệu từ form
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $status = isset($_POST['status']) ? trim($_POST['status']) : 'active';

        // Validation
        $errors = [];
        if (empty($content)) {
            $errors[] = "Nội dung không được để trống";
        }

        // Nếu có lỗi, quay lại form với thông báo
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location: /?act=collaborators&sub=add");
        }

        // Thêm vào database
        try {
            $result = $this->collaboratorsModel->add([
                'content' => $content,
                'status' => $status
            ]);

            if ($result) {
                $_SESSION['success'] = "Thêm collaborator thành công!";
                header("Location: /?act=collaborators");
            } else {
                $_SESSION['errors'] = ["Có lỗi xảy ra khi thêm collaborator. Vui lòng thử lại!"];
                header("Location: /?act=collaborators&sub=add");
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
            header("Location: /?act=collaborators&sub=add");
        }
    }

    public function update()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /?act=collaborators");
        }

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        $content = isset($_POST['content']) ? $_POST['content'] : '';
        $status = isset($_POST['status']) ? trim($_POST['status']) : 'active';

        // Validation
        $errors = [];
        if ($id <= 0) {
            $errors[] = "ID không hợp lệ";
        }
        if (empty($content)) {
            $errors[] = "Nội dung không được để trống";
        }

        // Nếu có lỗi, quay lại form với thông báo
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location: /?act=collaborators&sub=edit&id=" . $id);
        }

        // Cập nhật vào database
        try {
            $result = $this->collaboratorsModel->update($id, [
                'content' => $content,
                'status' => $status
            ]);

            if ($result) {
                $_SESSION['success'] = "Cập nhật collaborator thành công!";
                header("Location: /?act=collaborators");
            } else {
                $_SESSION['errors'] = ["Có lỗi xảy ra khi cập nhật collaborator. Vui lòng thử lại!"];
                header("Location: /?act=collaborators&sub=edit&id=" . $id);
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
            header("Location: /?act=collaborators&sub=edit&id=" . $id);
        }
    }

    public function delete()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /?act=collaborators");
        }

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

        if ($id <= 0) {
            $_SESSION['errors'] = ["ID không hợp lệ"];
            header("Location: /?act=collaborators");
        }

        try {
            $result = $this->collaboratorsModel->delete($id);

            if ($result) {
                $_SESSION['success'] = "Xóa collaborator thành công!";
            } else {
                $_SESSION['errors'] = ["Không thể xóa collaborator. Vui lòng thử lại!"];
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
        }

        header("Location: /?act=collaborators");
    }

    public function getById($id)
    {
        return $this->collaboratorsModel->getById($id);
    }
}
