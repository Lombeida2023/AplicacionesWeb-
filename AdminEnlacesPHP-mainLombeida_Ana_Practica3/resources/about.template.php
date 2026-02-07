<?php require __DIR__ . '/partials/header.php'; ?>

<section class="py-20 bg-gradient-to-b from-purple-50 to-white">
   <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-4xl font-bold text-purple-700 mb-8">
         Acerca de este Proyecto
      </h1>

      <p class="text-gray-600 mb-6">
         Este proyecto fue desarrollado como parte de la asignatura de Aplicaciones de Tecnologías Web.
         La práctica consistió en implementar un sistema CRUD (Crear, Leer, Actualizar y Eliminar)
         para la gestión de enlaces utilizando PHP y una base de datos relacional.
      </p>

      <p class="text-gray-600 mb-10">
         Se aplicó una arquitectura básica tipo MVC, donde los controladores gestionan la lógica
         de negocio y la conexión con la base de datos, mientras que las vistas se encargan
         de presentar la información de forma dinámica al usuario mediante HTML y estilos con Tailwind CSS.
      </p>

      <div class="grid sm:grid-cols-2 gap-8 text-left">
         
         <div class="bg-white p-8 rounded-2xl shadow-md border border-pink-100">
            <h3 class="font-semibold text-lg text-pink-600 mb-2">🎯 Objetivo del Proyecto</h3>
            <p class="text-gray-600 text-sm">
               Desarrollar un sistema de gestión de enlaces que permita registrar, visualizar,
               editar y eliminar información almacenada en una base de datos, aplicando buenas
               prácticas de organización del código y manejo de formularios en PHP.
            </p>
         </div>

         <div class="bg-white p-8 rounded-2xl shadow-md border border-purple-100">
            <h3 class="font-semibold text-lg text-purple-600 mb-2">🛠 Tecnologías Usadas</h3>
            <p class="text-gray-600 text-sm">
               PHP, PostgreSQL/MySQL, HTML, Tailwind CSS y un entorno local de desarrollo (XAMPP o Docker).
               Se utilizaron consultas SQL para las operaciones INSERT, SELECT, UPDATE y DELETE.
            </p>
         </div>

      </div>
   </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
