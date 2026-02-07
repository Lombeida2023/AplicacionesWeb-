<?php

$id = $_POST['id'] ?? null;
$name = trim($_POST['name'] ?? '');
$description = trim($_POST['description'] ?? '');
$price = trim($_POST['price'] ?? '');
$sku = trim($_POST['sku'] ?? '');

$errors = [];

if (!$id || !is_numeric($id)) {
    $errors[] = "ID inválido.";
}

if ($name === '') {
    $errors[] = "El nombre es obligatorio.";
}

if ($description === '') {
    $errors[] = "La descripción es obligatoria.";
}

if ($price === '' || !is_numeric($price)) {
    $errors[] = "El precio debe ser un número válido.";
}

if ($sku === '') {
    $errors[] = "El SKU es obligatorio.";
}

if ($errors) {
    die(implode("<br>", $errors));
}

$db->query(
    "UPDATE products SET name = ?, description = ?, price = ?, sku = ? WHERE id = ?", 
    [$name, $description, $price, $sku, $id]
);

header("Location: /products?success=updated");
exit();
