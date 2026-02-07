<?php

require_once __DIR__ . '/../../framework/Database.php';

$db = new Database();

// Obtener todos los links desde la base de datos
$links = $db->query("SELECT * FROM links ORDER BY id DESC")
            ->fetchAll(PDO::FETCH_ASSOC);

$enlacesCategorizados = [];

foreach ($links as $link) {

    // Categoría fija (porque no existe en la BD)
    $categoria = 'Enlaces registrados';

    if (!isset($enlacesCategorizados[$categoria])) {
        $enlacesCategorizados[$categoria] = [];
    }

    $enlacesCategorizados[$categoria][] = [
        'titulo' => $link['title'] ?? 'Sin título',
        'url' => $link['url'],
        'descripcion' => $link['description'] ?? 'Sin descripción'
    ];
}

// Enviar a la vista
require_once __DIR__ . '/../../resources/links.template.php';
