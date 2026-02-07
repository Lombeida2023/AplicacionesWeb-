
<?php

$id = $_POST['id'];

$db->query("DELETE FROM products WHERE id = ?", [$id]);

header("Location: /products");
exit();
