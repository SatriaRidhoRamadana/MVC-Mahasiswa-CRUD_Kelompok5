<?php
require_once "config/database.php";
require_once "controllers/mahasiswaController.php";

$database = new Database();
$db = $database->getConnection();

$controller = new MahasiswaController($db);

$action = $_GET['action'] ?? 'index';

switch ($action) {
    case 'tambah':
        $controller->create();
        break;
    
    case 'edit':
        $controller->edit();
        break;
    
    case 'delete':
        $controller->delete();
        break;

    default:
        $controller->index();
        break;
}
