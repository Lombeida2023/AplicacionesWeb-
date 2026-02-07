<?php require __DIR__ . '/partials/header.php'; ?>

<section class="py-20 bg-gradient-to-b from-purple-50 to-white">
   <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-4xl font-bold text-purple-700 mb-8">
         📘 Acerca de este Proyecto
      </h1>

      <p class="text-gray-600 mb-6">
         Este proyecto fue desarrollado como parte de la asignatura de 
         <strong>Aplicaciones de Tecnologías Web</strong>, con el propósito de aplicar el 
         desarrollo de aplicaciones dinámicas utilizando <strong>PHP y bases de datos</strong>.
      </p>

      <p class="text-gray-600 mb-10">
         La aplicación implementa un sistema <strong>CRUD (Crear, Leer, Actualizar y Eliminar)</strong> 
         para la gestión de productos, permitiendo registrar información como nombre, descripción, 
         precio y código SKU. También se incorporó un sistema de búsqueda que filtra productos de 
         manera dinámica desde la base de datos.
      </p>

      <p class="text-gray-600 mb-12">
         Durante el desarrollo se reforzaron conceptos como la conexión a bases de datos mediante PHP,
         consultas SQL parametrizadas, validación de formularios y organización del código siguiendo 
         una estructura similar al patrón <strong>MVC (Modelo-Vista-Controlador)</strong>, donde el 
         controlador maneja la lógica, el modelo interactúa con la base de datos y las vistas muestran 
         la información al usuario.
      </p>

      <div class="grid sm:grid-cols-2 gap-8 text-left">
         
         <div class="bg-white p-8 rounded-2xl shadow-md border border-pink-100">
            <h3 class="font-semibold text-lg text-pink-600 mb-2">🎯 Objetivo del Proyecto</h3>
            <p class="text-gray-600 text-sm">
               Desarrollar una aplicación web en PHP que permita administrar productos mediante
               operaciones CRUD, aplicando buenas prácticas de programación, conexión segura a base
               de datos y generación dinámica de contenido.
            </p>
         </div>

         <div class="bg-white p-8 rounded-2xl shadow-md border border-purple-100">
            <h3 class="font-semibold text-lg text-purple-600 mb-2">🛠 Tecnologías Usadas</h3>
            <p class="text-gray-600 text-sm">
               PHP para la lógica del servidor, MySQL para el almacenamiento de datos, HTML para la 
               estructura de las páginas, Tailwind CSS para el diseño visual y XAMPP como entorno de 
               desarrollo local.
            </p>
         </div>

      </div>
   </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
