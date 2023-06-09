<?php
require_once 'controllers/UserController.php';

require 'views/user/homePage.php';

$controller = new UserController();

if (isset($_POST['name'])) {
    $action = $_POST['name'];

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
