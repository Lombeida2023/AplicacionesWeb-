<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

$id = $_POST['id'] ?? null;
$title = $_POST['title'] ?? '';
$url = $_POST['url'] ?? '';
$description = $_POST['description'] ?? '';

if (!$id || !$title || !$url) {
    die('Datos incompletos');
}

$sql = "UPDATE links 
        SET title = :title, url = :url, description = :description 
        WHERE id = :id";

$db->query($sql, [
    'title' => $title,
    'url' => $url,
    'description' => $description,
    'id' => $id
]);

header('Location: /links');
exit;
