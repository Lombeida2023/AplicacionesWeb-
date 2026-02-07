<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

$id = $_GET['id'] ?? null;

if (!$id) {
    die('ID no proporcionado');
}

$sql = "SELECT * FROM links WHERE id = :id";
$stmt = $db->query($sql, ['id' => $id]);
$link = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$link) {
    die('Enlace no encontrado');
}

require __DIR__ . '/../../resources/links-edit.template.php';
