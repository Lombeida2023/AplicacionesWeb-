<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

$sql = "SELECT * FROM links ORDER BY id DESC";
$stmt = $db->query($sql);

$links = $stmt->fetchAll(PDO::FETCH_ASSOC);

require __DIR__ . '/../../resources/links.template.php';
