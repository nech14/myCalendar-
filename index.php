<?php


require_once 'logic/controller.php';

$host = '127.0.0.1:3306';
$db = 'nbd121';
$user = 'nbd121';
$password = 'rzpGbFEi';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}


$controller = new bdController();


if (!empty($_GET['action'])) {
    $action = $_GET['action'];
    if (method_exists($controller, $action)) {
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
            $controller->$action($id);
        } else {
            $controller->$action();
        }
    } else {
        echo 'Invalid action';
    }
} else {
    $controller->index();
}