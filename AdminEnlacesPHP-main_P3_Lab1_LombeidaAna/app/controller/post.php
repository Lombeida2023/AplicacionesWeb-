<?php

require_once __DIR__ . '/../../framework/Database.php';

$title = "Posts";

$db = new Database();

$id = $_GET['id'] ?? null;

if (!$id) {
    die("ID de artículo no proporcionado");
}

$sql = "SELECT * FROM posts WHERE id = :id";
$stmt = $db->query($sql, ['id' => $id]);

$post = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$post) {
    die("Artículo no encontrado");
}

require __DIR__ . '/../../resources/post.template.php';
