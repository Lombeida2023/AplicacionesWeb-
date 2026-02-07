<?php

$id = $_GET['id'];

$product = $db->query("SELECT * FROM products WHERE id = ?", [$id])->fetch();

require __DIR__ . '/../../resources/products-edit.template.php';
