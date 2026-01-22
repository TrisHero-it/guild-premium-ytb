<?php

require_once __DIR__ . "/../model/Family.php";
require_once __DIR__ . "/../model/db.php";

class FamilyController
{
    private $familyModel;
    private $uploadDir = "../uploads/bills/";

    public function __construct()
    {
        $this->familyModel = new family();

        // Thiết lập thư mục upload
        $this->uploadDir = __DIR__ . "/../uploads/bills/";

        // Tạo thư mục upload nếu chưa tồn tại
        if (!file_exists($this->uploadDir)) {
            mkdir($this->uploadDir, 0777, true);
        }
    }

    public function add()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /?act=add-family");
        }

        // Lấy dữ liệu từ form
        $form = isset($_POST['form']) ? trim($_POST['form']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $user = isset($_POST['user']) ? trim($_POST['user']) : '';
        $number_phone = isset($_POST['number_phone']) ? trim($_POST['number_phone']) : null;
        $number_bank = isset($_POST['number_bank']) ? trim($_POST['number_bank']) : '';
        $name_bank = isset($_POST['name_bank']) ? trim($_POST['name_bank']) : '';
        $status = isset($_POST['status']) ? trim($_POST['status']) : '';
        $note = isset($_POST['note']) ? trim($_POST['note']) : null;

        // Xử lý datetime
        $payment_at = !empty($_POST['payment_at']) ? $_POST['payment_at'] : null;
        $pay_due_date = isset($_POST['pay_due_date']) ? $_POST['pay_due_date'] : '';

        // Xử lý members - ưu tiên JSON nếu có, nếu không thì lưu text gốc
        $member1 = $this->processMemberData($_POST['member1'] ?? null, $_POST['member1_json'] ?? null);
        $member2 = $this->processMemberData($_POST['member2'] ?? null, $_POST['member2_json'] ?? null);
        $member3 = $this->processMemberData($_POST['member3'] ?? null, $_POST['member3_json'] ?? null);
        $member4 = $this->processMemberData($_POST['member4'] ?? null, $_POST['member4_json'] ?? null);
        $member5 = $this->processMemberData($_POST['member5'] ?? null, $_POST['member5_json'] ?? null);

        // Xử lý upload nhiều file hóa đơn
        $bill_payment = null;
        if (!empty($_FILES['bill_payment']['name'])) {
            $names = $_FILES['bill_payment']['name'];
            $uploaded = [];
            if (is_array($names)) {
                for ($i = 0; $i < count($names); $i++) {
                    $file = [
                        'name' => $_FILES['bill_payment']['name'][$i],
                        'type' => $_FILES['bill_payment']['type'][$i],
                        'tmp_name' => $_FILES['bill_payment']['tmp_name'][$i],
                        'error' => $_FILES['bill_payment']['error'][$i],
                        'size' => $_FILES['bill_payment']['size'][$i]
                    ];
                    if ($file['error'] === UPLOAD_ERR_OK) {
                        $fileName = $this->handleFileUpload($file);
                        if ($fileName) {
                            $uploaded[] = $fileName;
                        }
                    }
                }
            } else {
                $file = $_FILES['bill_payment'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $fileName = $this->handleFileUpload($file);
                    if ($fileName) {
                        $uploaded[] = $fileName;
                    }
                }
            }
            if (!empty($uploaded)) {
                $bill_payment = json_encode($uploaded, JSON_UNESCAPED_UNICODE);
            }
        }

        // Validation
        $errors = [];
        if (empty($form)) {
            $errors[] = "Hình thức không được để trống";
        }
        if (empty($email)) {
            $errors[] = "Email không được để trống";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email không hợp lệ";
        }
        if (empty($user)) {
            $errors[] = "Họ và tên không được để trống";
        }
        if (empty($number_bank)) {
            $errors[] = "Số tài khoản ngân hàng không được để trống";
        }
        if (empty($name_bank)) {
            $errors[] = "Tên ngân hàng không được để trống";
        }
        if (empty($status)) {
            $errors[] = "Trạng thái không được để trống";
        }
        if (empty($pay_due_date)) {
            $errors[] = "Ngày đáo hạn không được để trống";
        }

        // Nếu có lỗi, quay lại form với thông báo
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location: /?act=add-family");
        }

        // Thêm vào database
        try {
            $result = $this->familyModel->add([
                'form' => $form,
                'payment_at' => $payment_at,
                'email' => $email,
                'number_phone' => $number_phone,
                'number_bank' => $number_bank,
                'name_bank' => $name_bank,
                'user' => $user,
                'bill_payment' => $bill_payment,
                'status' => $status,
                'pay_due_date' => $pay_due_date,
                'note' => $note,
                'member1' => $member1,
                'member2' => $member2,
                'member3' => $member3,
                'member4' => $member4,
                'member5' => $member5
            ]);

            if ($result) {
                $_SESSION['success'] = "Thêm family thành công!";
                header("Location: /");
            } else {
                $_SESSION['errors'] = ["Có lỗi xảy ra khi thêm family. Vui lòng thử lại!"];
                header("Location: /?act=add-family");
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
            header("Location: /?act=add-family");
        }
    }

    /**
     * Xử lý dữ liệu member - ưu tiên JSON, nếu không có thì lưu text gốc
     */
    private function processMemberData($textData, $jsonData)
    {
        // Nếu có JSON data, sử dụng nó
        if (!empty($jsonData)) {
            $decoded = json_decode($jsonData, true);
            if (json_last_error() === JSON_ERROR_NONE && is_array($decoded)) {
                return json_encode($decoded, JSON_UNESCAPED_UNICODE);
            }
        }

        // Nếu không có JSON hoặc JSON không hợp lệ, lưu text gốc
        return !empty($textData) ? trim($textData) : null;
    }

    private function handleFileUpload($file)
    {
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/webp', 'application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        $maxFileSize = 10 * 1024 * 1024; // 10MB

        // Kiểm tra lỗi upload
        if ($file['error'] !== UPLOAD_ERR_OK) {
            return null;
        }

        // Kiểm tra kích thước file
        if ($file['size'] > $maxFileSize) {
            $_SESSION['errors'][] = "File quá lớn. Kích thước tối đa là 10MB";
            return null;
        }

        // Kiểm tra loại file
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mimeType = finfo_file($finfo, $file['tmp_name']);
        finfo_close($finfo);

        if (!in_array($mimeType, $allowedTypes)) {
            $_SESSION['errors'][] = "Loại file không được hỗ trợ. Chỉ chấp nhận: JPG, PNG, GIF, PDF, DOC, DOCX";
            return null;
        }

        // Tạo tên file unique
        $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
        $fileName = uniqid() . '_' . time() . '.' . $extension;
        $filePath = $this->uploadDir . $fileName;

        // Upload file
        if (move_uploaded_file($file['tmp_name'], $filePath)) {
            return $fileName;
        }

        return null;
    }

    public function getAll()
    {
        $families = $this->familyModel->getAll();
        return $families;
    }

    /**
     * Lấy danh sách family có tìm kiếm theo order_code và phân trang.
     * @return array ['items' => array, 'total' => int, 'page' => int, 'per_page' => int]
     */
    public function getListWithSearch($orderCode = '', $page = 1, $perPage = 20)
    {
        $page = max(1, (int) $page);
        $perPage = max(1, min(100, (int) $perPage));
        $result = $this->familyModel->getBySearch($orderCode, $page, $perPage);
        $result['page'] = $page;
        $result['per_page'] = $perPage;
        return $result;
    }

    public function getById($id)
    {
        return $this->familyModel->getById($id);
    }

    public function delete()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /");
        }

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;

        if ($id <= 0) {
            $_SESSION['errors'] = ["ID không hợp lệ"];
            header("Location: /");
        }

        try {
            $result = $this->familyModel->delete($id);

            if ($result) {
                $_SESSION['success'] = "Xóa family thành công!";
            } else {
                $_SESSION['errors'] = ["Không thể xóa family. Vui lòng thử lại!"];
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
        }

        header("Location: /");
    }

    public function update()
    {
        // Kiểm tra request method
        if ($_SERVER["REQUEST_METHOD"] !== "POST") {
            header("Location: /");
            return;
        }

        $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
        if ($id <= 0) {
            $_SESSION['errors'] = ["ID không hợp lệ"];
            header("Location: /");
            return;
        }

        // Lấy dữ liệu từ form
        $form = isset($_POST['form']) ? trim($_POST['form']) : '';
        $email = isset($_POST['email']) ? trim($_POST['email']) : '';
        $user = isset($_POST['user']) ? trim($_POST['user']) : '';
        $number_phone = isset($_POST['number_phone']) ? trim($_POST['number_phone']) : null;
        $number_bank = isset($_POST['number_bank']) ? trim($_POST['number_bank']) : '';
        $name_bank = isset($_POST['name_bank']) ? trim($_POST['name_bank']) : '';
        $status = isset($_POST['status']) ? trim($_POST['status']) : '';
        $note = isset($_POST['note']) ? trim($_POST['note']) : null;

        // Xử lý datetime
        $payment_at = !empty($_POST['payment_at']) ? $_POST['payment_at'] : null;
        $pay_due_date = isset($_POST['pay_due_date']) ? $_POST['pay_due_date'] : '';

        // Xử lý members - ưu tiên JSON nếu có, nếu không thì lưu text gốc
        $member1 = $this->processMemberData($_POST['member1'] ?? null, $_POST['member1_json'] ?? null);
        $member2 = $this->processMemberData($_POST['member2'] ?? null, $_POST['member2_json'] ?? null);
        $member3 = $this->processMemberData($_POST['member3'] ?? null, $_POST['member3_json'] ?? null);
        $member4 = $this->processMemberData($_POST['member4'] ?? null, $_POST['member4_json'] ?? null);
        $member5 = $this->processMemberData($_POST['member5'] ?? null, $_POST['member5_json'] ?? null);

        // Lấy thông tin family hiện tại để giữ bill_payment nếu không upload file mới
        $currentFamily = $this->familyModel->getById($id);
        $bill_payment = $currentFamily ? $currentFamily['bill_payment'] : null;

        // Giữ ảnh cũ, chỉ thêm file mới (không xóa ảnh cũ)
        $existingFiles = [];
        if ($bill_payment) {
            $decoded = json_decode($bill_payment, true);
            $existingFiles = is_array($decoded) ? $decoded : [$bill_payment];
        }

        // Xử lý upload nhiều file mới (thêm vào danh sách hiện có)
        if (!empty($_FILES['bill_payment']['name'])) {
            $names = $_FILES['bill_payment']['name'];
            $uploaded = [];
            if (is_array($names)) {
                for ($i = 0; $i < count($names); $i++) {
                    $file = [
                        'name' => $_FILES['bill_payment']['name'][$i],
                        'type' => $_FILES['bill_payment']['type'][$i],
                        'tmp_name' => $_FILES['bill_payment']['tmp_name'][$i],
                        'error' => $_FILES['bill_payment']['error'][$i],
                        'size' => $_FILES['bill_payment']['size'][$i]
                    ];
                    if ($file['error'] === UPLOAD_ERR_OK) {
                        $fileName = $this->handleFileUpload($file);
                        if ($fileName) {
                            $uploaded[] = $fileName;
                        }
                    }
                }
            } else {
                $file = $_FILES['bill_payment'];
                if ($file['error'] === UPLOAD_ERR_OK) {
                    $fileName = $this->handleFileUpload($file);
                    if ($fileName) {
                        $uploaded[] = $fileName;
                    }
                }
            }
            if (!empty($uploaded)) {
                $bill_payment = json_encode(array_merge($existingFiles, $uploaded), JSON_UNESCAPED_UNICODE);
            } else {
                $bill_payment = !empty($existingFiles) ? json_encode($existingFiles, JSON_UNESCAPED_UNICODE) : null;
            }
        } else {
            $bill_payment = !empty($existingFiles) ? json_encode($existingFiles, JSON_UNESCAPED_UNICODE) : null;
        }

        // Validation
        $errors = [];
        if (empty($form)) {
            $errors[] = "Hình thức không được để trống";
        }
        if (empty($email)) {
            $errors[] = "Email không được để trống";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email không hợp lệ";
        }
        if (empty($user)) {
            $errors[] = "Họ và tên không được để trống";
        }
        if (empty($number_bank)) {
            $errors[] = "Số tài khoản ngân hàng không được để trống";
        }
        if (empty($name_bank)) {
            $errors[] = "Tên ngân hàng không được để trống";
        }
        if (empty($status)) {
            $errors[] = "Trạng thái không được để trống";
        }
        if (empty($pay_due_date)) {
            $errors[] = "Ngày đáo hạn không được để trống";
        }

        // Nếu có lỗi, quay lại form với thông báo
        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['old_data'] = $_POST;
            header("Location: /?act=edit-family&id=" . $id);
            return;
        }

        // Cập nhật vào database
        try {
            $result = $this->familyModel->update($id, [
                'form' => $form,
                'payment_at' => $payment_at,
                'email' => $email,
                'number_phone' => $number_phone,
                'number_bank' => $number_bank,
                'name_bank' => $name_bank,
                'user' => $user,
                'bill_payment' => $bill_payment,
                'status' => $status,
                'pay_due_date' => $pay_due_date,
                'note' => $note,
                'member1' => $member1,
                'member2' => $member2,
                'member3' => $member3,
                'member4' => $member4,
                'member5' => $member5
            ]);

            if ($result) {
                $_SESSION['success'] = "Cập nhật family thành công!";
                header("Location: /");
            } else {
                $_SESSION['errors'] = ["Có lỗi xảy ra khi cập nhật family. Vui lòng thử lại!"];
                header("Location: /?act=edit-family&id=" . $id);
            }
        } catch (Exception $e) {
            $_SESSION['errors'] = ["Lỗi: " . $e->getMessage()];
            header("Location: /?act=edit-family&id=" . $id);
        }
    }
}
