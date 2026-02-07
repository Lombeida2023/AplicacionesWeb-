<?php

$title = "Productos";

$search = $_GET['search'] ?? '';
$order  = $_GET['order'] ?? '';
$page   = isset($_GET['page']) ? (int) $_GET['page'] : 1;

$perPage = 5;
$offset = ($page - 1) * $perPage;

/* ===== FILTRO DE BÚSQUEDA ===== */
$where = "";
$params = [];

if ($search) {
    $where = "WHERE name LIKE :search OR sku LIKE :search";
    $params['search'] = "%$search%";
}

/* ===== ORDENAMIENTO ===== */
$orderSql = "ORDER BY id DESC";
if ($order === 'asc')  $orderSql = "ORDER BY price ASC";
if ($order === 'desc') $orderSql = "ORDER BY price DESC";

/* ===== CONTAR TOTAL DE PRODUCTOS (para paginación y contador) ===== */
$totalQuery = "SELECT COUNT(*) as total FROM products $where";
$stmtTotal = $db->query($totalQuery, $params);
$totalProducts = $stmtTotal->fetch()['total'];

$totalPages = ceil($totalProducts / $perPage);

/* ===== CONSULTA FINAL CON PAGINACIÓN ===== */
$sql = "SELECT * FROM products $where $orderSql LIMIT $perPage OFFSET $offset";
$stmt = $db->query($sql, $params);
$products = $stmt->fetchAll();

/* ===== ENVIAR A LA VISTA ===== */
require __DIR__ . '/../../resources/products.template.php';
