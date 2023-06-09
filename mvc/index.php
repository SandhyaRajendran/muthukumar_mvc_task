<?php
require_once 'controllers/UserController.php';

$controller = new UserController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];

    switch ($action) {
        case 'create':
            $controller->create();
            break;
        case 'edit':
            $controller->edit($_GET['id']);
            break;
        case 'delete':
            $controller->delete($_GET['id']);
            break;
        case 'view':
            $controller->view($_GET['id']);
            break;
        default:
            $controller->index();
            break;
    }
} else {
    $controller->index();
}
