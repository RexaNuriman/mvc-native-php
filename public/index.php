
<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../app/controllers/MahasiswaController.php';

$database = new Database();
$db = $database->connect();

$controller = new MahasiswaController($db);

$action = $_GET['action'] ?? 'index';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

switch ($action) {
    case 'index':
        $mahasiswa = $controller->index();
        require __DIR__ . '/../app/views/mahasiswa/index.php';
        break;

    case 'create':
        require __DIR__ . '/../app/views/mahasiswa/create.php';
        break;

    case 'store':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->store($_POST);
        }

        header('Location: index.php');
        exit;

    case 'edit':
        if (!$id || $id < 1) {
            http_response_code(400);
            exit('ID mahasiswa tidak valid.');
        }

        $mahasiswa = $controller->show($id);

        if (!$mahasiswa) {
            http_response_code(404);
            exit('Mahasiswa tidak ditemukan.');
        }

        require __DIR__ . '/../app/views/mahasiswa/edit.php';
        break;

    case 'update':
        if (!$id || $id < 1) {
            http_response_code(400);
            exit('ID mahasiswa tidak valid.');
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->update($id, $_POST);
        }

        header('Location: index.php');
        exit;

    case 'delete':
        if (!$id || $id < 1) {
            http_response_code(400);
            exit('ID mahasiswa tidak valid.');
        }

        $controller->destroy($id);

        header('Location: index.php');
        exit;

    default:
        http_response_code(404);
        echo 'Halaman tidak ditemukan.';
        break;
}
