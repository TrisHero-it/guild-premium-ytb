<?php
require_once __DIR__ . '/model/Family.php';
require_once __DIR__ . '/controller/FamilyController.php';
require_once __DIR__ . '/controller/CollaboratorsController.php';

$act = isset($_GET['act']) ? $_GET['act'] : '';
$sub = isset($_GET['sub']) ? $_GET['sub'] : '';

// Xử lý POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action'])) {
                switch ($_POST['action']) {
                        case 'add-family':
                                require_once __DIR__ . '/controller/FamilyController.php';
                                $controller = new FamilyController();
                                $controller->add();
                                break;
                        case 'delete-family':
                                require_once __DIR__ . '/controller/FamilyController.php';
                                $controller = new FamilyController();
                                $controller->delete();
                                break;
                        case 'update-family':
                                require_once __DIR__ . '/controller/FamilyController.php';
                                $controller = new FamilyController();
                                $controller->update();
                                break;
                        case 'add-collaborator':
                                require_once __DIR__ . '/controller/CollaboratorsController.php';
                                $controller = new CollaboratorsController();
                                $controller->add();
                                break;
                        case 'update-collaborator':
                                require_once __DIR__ . '/controller/CollaboratorsController.php';
                                $controller = new CollaboratorsController();
                                $controller->update();
                                break;
                        case 'delete-collaborator':
                                require_once __DIR__ . '/controller/CollaboratorsController.php';
                                $controller = new CollaboratorsController();
                                $controller->delete();
                }
        }
}

// Xử lý GET request
if ($act === 'collaborators') {
        require_once __DIR__ . '/controller/CollaboratorsController.php';
        $collaboratorsController = new CollaboratorsController();

        if ($sub === 'add') {
                include 'views/collaborators/add.php';
        } elseif ($sub === 'edit' && isset($_GET['id'])) {
                $collaborator = $collaboratorsController->getById($_GET['id']);
                if (!$collaborator) {
                        $_SESSION['errors'] = ["Không tìm thấy collaborator"];
                        header("Location: /?act=collaborators");
                }
                include 'views/collaborators/edit.php';
        } else {
                $collaborators = $collaboratorsController->getAll();
                include 'views/collaborators/index.php';
        }
} elseif ($act === 'guide' || $act === 'huong-dan') {
        // Trang hướng dẫn cộng tác viên (public)
        require_once __DIR__ . '/model/GuildCollaborators.php';
        $collaboratorsModel = new GuildCollaborators();
        $collaborators = $collaboratorsModel->getAll();
        // Lọc chỉ lấy những cái có status = 'active'
        $activeCollaborators = array_filter($collaborators, function ($item) {
                return isset($item['status']) && $item['status'] === 'active';
        });
        include 'views/index.php';
} else {
        // Default: Family management
        $familyController = new FamilyController();
        $orderCode = isset($_GET['order_code']) ? trim($_GET['order_code']) : '';
        $page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
        $perPage = 20;

        if ($act === 'add-family') {
                include 'views/youtube/add.php';
        } elseif ($act === 'edit-family' && isset($_GET['id'])) {
                $family = $familyController->getById($_GET['id']);
                if (!$family) {
                        $_SESSION['errors'] = ["Không tìm thấy family"];
                        header("Location: /");
                        exit;
                }
                include 'views/youtube/edit.php';
        } else {
                $listResult = $familyController->getListWithSearch($orderCode, $page, $perPage);
                $families = $listResult['items'];
                $totalFamilies = $listResult['total'];
                $page = $listResult['page'];
                $perPage = $listResult['per_page'];
                include 'views/youtube/index.php';
        }
}
