<?php

$title = "Post";
$post = [
    'titulo' => 'El Rol de PHP en la Organización y Procesamiento de Información Web',
    'autor' => 'Ana Elizabeth Lombeida Fajardo',
    'fecha' => '2026-02-05',
    'contenido' => 'PHP es un lenguaje de programación ampliamente utilizado en el desarrollo de aplicaciones web dinámicas. A lo largo de los años se ha consolidado como una herramienta versátil que permite crear sistemas interactivos y estructurados. En este proyecto se demuestra cómo es posible organizar información utilizando arreglos asociativos, los cuales permiten almacenar datos relacionados bajo una misma estructura lógica. Además, se aplican funciones personalizadas que procesan la información antes de mostrarla en pantalla, como el formateo de datos, el conteo de palabras y la generación de etiquetas dinámicas. Esta práctica ayuda a comprender la importancia de separar la lógica del programa de la presentación visual, favoreciendo un código más ordenado, reutilizable y fácil de mantener. También permite reforzar el uso de estructuras de control y el manejo de datos en PHP, sentando bases sólidas para el desarrollo de aplicaciones web más complejas en el futuro.',
    'tags' => ['PHP', 'Funciones', 'Arreglos', 'Desarrollo Web']
];


function formatear_info_autor(array $postData): string {
    return "Publicado por {$postData['autor']} el {$postData['fecha']}";
}

function renderizar_tags_html(array $tags): string {
    $html = '';
    foreach ($tags as $tag) {
        $html .= "<span class='tag'>{$tag}</span> ";
    }
    return $html;
}

function contar_palabras(string $texto): int {
    return str_word_count($texto);
}

require __DIR__ . '/../../resources/post.template.php';
