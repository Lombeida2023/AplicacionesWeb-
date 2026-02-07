<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

$id = $_POST['id'] ?? null;

if (!$id) {
    die('ID no recibido');
}

$sql = "DELETE FROM links WHERE id = :id";
$db->query($sql, ['id' => $id]);

header('Location: /links');
exit;
