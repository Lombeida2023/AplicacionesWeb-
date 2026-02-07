<?php

$name = trim($_POST['name'] ?? '');
$description = trim($_POST['description'] ?? '');
$price = trim($_POST['price'] ?? '');
$sku = trim($_POST['sku'] ?? '');

$errors = [];

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
    "INSERT INTO products (name, description, price, sku) VALUES (?, ?, ?, ?)", 
    [$name, $description, $price, $sku]
);

header("Location: /products?success=created");
exit();
