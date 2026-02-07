<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

/* =========================
   OBTENER DATOS
========================= */
$totalLinks = $db->query("SELECT COUNT(*) AS total FROM links")
                 ->fetch(PDO::FETCH_ASSOC)['total'];

$totalUsers = $db->query("SELECT COUNT(*) AS total FROM users")
                 ->fetch(PDO::FETCH_ASSOC)['total'];

$ultimoUsuario = $db->query("
    SELECT email 
    FROM users 
    ORDER BY created_at DESC 
    LIMIT 1
")->fetch(PDO::FETCH_ASSOC);

/* =========================
   ARMAR ARRAY $stats
========================= */
$stats = [
    'total_links' => $totalLinks,
    'total_users' => $totalUsers,
    'last_user_email' => $ultimoUsuario['email'] ?? 'No registrado'
];

/* =========================
   ENVIAR A LA VISTA
========================= */
require_once __DIR__ . '/../../resources/dashboard.template.php';
