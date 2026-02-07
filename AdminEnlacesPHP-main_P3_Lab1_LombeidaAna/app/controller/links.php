<?php

$enlacesCategorizados = [

    "Ciberseguridad & Aprendizaje" => [
        [
            "url" => "https://owasp.org/www-project-top-ten/",
            "descripcion" => "OWASP Top 10 – Vulnerabilidades web más críticas"
        ],
        [
            "url" => "https://tryhackme.com/",
            "descripcion" => "Plataforma interactiva para aprender hacking ético"
        ],
        [
            "url" => "https://www.hackthebox.com/",
            "descripcion" => "Laboratorios prácticos de ciberseguridad"
        ]
    ],

    "Canales de YouTube – Ciberseguridad" => [
        [
            "url" => "https://www.youtube.com/@NetworkChuck",
            "descripcion" => "Redes, hacking y Linux explicado de forma clara"
        ],
        [
            "url" => "https://www.youtube.com/@HackerSploit",
            "descripcion" => "Pentesting y seguridad informática profesional"
        ],
        [
            "url" => "https://www.youtube.com/@DavidBombal",
            "descripcion" => "Redes, automatización y ciberseguridad"
        ]
    ],

    "Desarrollo Web & Backend" => [
        [
            "url" => "https://laravel.com/",
            "descripcion" => "Framework PHP moderno y elegante"
        ],
        [
            "url" => "https://symfony.com/",
            "descripcion" => "Componentes PHP reutilizables"
        ],
        [
            "url" => "https://developer.mozilla.org/es/",
            "descripcion" => "Documentación esencial para desarrolladores web"
        ]
    ],

    "Herramientas para Estudiantes" => [
        [
            "url" => "https://github.com/",
            "descripcion" => "Control de versiones y colaboración"
        ],
        [
            "url" => "https://code.visualstudio.com/",
            "descripcion" => "Editor de código ligero y potente"
        ],
        [
            "url" => "https://notion.so/",
            "descripcion" => "Organización académica y productividad"
        ]
    ]
];

require_once __DIR__ . "/../../resources/links.template.php";
