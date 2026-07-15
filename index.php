<?php
session_start();

require_once __DIR__ . '/model/Family.php';
require_once __DIR__ . '/controller/FamilyController.php';
require_once __DIR__ . '/controller/CollaboratorsController.php';
require_once __DIR__ . '/controller/HistoryFamilyController.php';

$act = isset($_GET['act']) ? $_GET['act'] : '';

if ($act === 'history-family') {
        header('Content-Type: application/json; charset=utf-8');

        $controller = new HistoryFamilyController();

        echo json_encode(
                $controller->getByFamilyId((int)($_GET['family_id'] ?? 0)),
                JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES
        );
        exit;
}


$sub = isset($_GET['sub']) ? $_GET['sub'] : '';
$username = "admin";
$password = "Muakey@@111";
$publicActs = ['guide', 'huong-dan', 'login', 'history-family'];

if ($act === 'logout') {
        $_SESSION = [];
        if (ini_get('session.use_cookies')) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }
        session_destroy();
        header('Location: /?act=login');
        exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && ($_POST['action'] ?? '') === 'login') {
        $inputUser = trim($_POST['username'] ?? '');
        $inputPass = $_POST['password'] ?? '';
        if ($inputUser === $username && $inputPass === $password) {
                $_SESSION['logged_in'] = true;
                header('Location: /');
                exit;
        }
        $_SESSION['login_error'] = 'Tài khoản hoặc mật khẩu không đúng';
        header('Location: /?act=login');
        exit;
}

$isLoggedIn = !empty($_SESSION['logged_in']);
$isPublicRoute = in_array($act, $publicActs, true);

if (!$isLoggedIn && !$isPublicRoute) {
        header('Location: /?act=login');
        exit;
}

if ($act === 'login') {
        if ($isLoggedIn) {
                header('Location: /');
                exit;
        }
        $loginError = $_SESSION['login_error'] ?? null;
        unset($_SESSION['login_error']);
        include 'views/login/login.php';
        exit;
}

// Xử lý POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['action'])) {
                switch ($_POST['action']) {
                        case 'add-family':
                                require_once __DIR__ . '/controller/FamilyController.php';
                                $controller = new FamilyController();
                                $controller->add();
                                break;
                        case "add-history-family":
                                require_once __DIR__ . '/controller/HistoryFamilyController.php';
                                $controller = new HistoryFamilyController();
                                $controller->addHistory($_GET['order_id'], $_GET['family_id'], $_GET['status'], $_GET['old_value'], $_GET['new_value'], $_GET['name_product'], $_GET['email']);
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
                        case 'quick-pay-family':
                                require_once __DIR__ . '/controller/FamilyController.php';
                                $controller = new FamilyController();
                                $controller->quickPay();
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
        $sort = isset($_GET['sort']) ? trim((string) $_GET['sort']) : '';
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
                $listResult = $familyController->getListWithSearch($orderCode, $page, $perPage, $sort);
                $families = $listResult['items'];
                $totalFamilies = $listResult['total'];
                $page = $listResult['page'];
                $perPage = $listResult['per_page'];
                $sort = $listResult['sort'];
                include 'views/youtube/index.php';
        }
}
