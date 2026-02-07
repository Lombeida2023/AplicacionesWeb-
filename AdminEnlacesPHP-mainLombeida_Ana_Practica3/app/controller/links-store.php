<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

$title = $_POST['title'] ?? '';
$url = $_POST['url'] ?? '';
$description = $_POST['description'] ?? '';

if (!$title || !$url || !$description) {
    die('Todos los campos son obligatorios');
}

$sql = "INSERT INTO links (title, url, description)
        VALUES (:title, :url, :description)";

$db->query($sql, [
    'title' => $title,
    'url' => $url,
    'description' => $description
]);

header('Location: /links');
exit;
