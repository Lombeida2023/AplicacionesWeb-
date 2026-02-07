<?php
// app/controller/links-create.php

$title_page = "Registrar Proyecto";
$errors = [];

// Si el usuario hizo clic en el botón de "Guardar"
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // Capturamos los datos
    $title = $_POST['title'] ?? '';
    $url = $_POST['url'] ?? '';
    $description = $_POST['description'] ?? '';

    // Validamos
    if (empty($title)) $errors[] = "El título es obligatorio.";
    if (empty($url)) {
        $errors[] = "La url es obligatoria.";
    } elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
        $errors[] = "La url no es válida.";
    }
    if (empty($description)) $errors[] = "La descripción es obligatoria.";

    // Si todo está bien, guardamos
    if (empty($errors)) {
        $db->query('INSERT INTO links (title, url, description) VALUES (:title, :url, :description)', [
            'title' => $title,
            'url' => $url,
            'description' => $description
        ]);

        header('Location: /links');
        exit; 
    }
}

// Cargamos la vista siempre al final
require __DIR__ . '/../../resources/links-create.template.php';