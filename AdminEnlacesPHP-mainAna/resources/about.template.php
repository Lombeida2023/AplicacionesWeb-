<?php require __DIR__ . '/partials/header.php'; ?>

<section class="py-20 bg-gradient-to-b from-purple-50 to-white">
   <div class="max-w-4xl mx-auto text-center">
      <h1 class="text-4xl font-bold text-purple-700 mb-8">
         Acerca de este Proyecto
      </h1>

      <p class="text-gray-600 mb-6">
         Este proyecto fue desarrollado como parte de la asignatura de Aplicaciones de Tecnologías Web.
         Su objetivo principal es reforzar el uso de PHP en la manipulación de estructuras de datos,
         especialmente arreglos bidimensionales y funciones para el procesamiento de información.
      </p>

      <p class="text-gray-600 mb-10">
         A través de esta aplicación se aplican conceptos de arquitectura básica tipo MVC,
         donde el controlador gestiona los datos y la vista se encarga de mostrarlos dinámicamente en HTML.
      </p>

      <div class="grid sm:grid-cols-2 gap-8 text-left">
         
         <div class="bg-white p-8 rounded-2xl shadow-md border border-pink-100">
            <h3 class="font-semibold text-lg text-pink-600 mb-2">🎯 Objetivo del Proyecto</h3>
            <p class="text-gray-600 text-sm">
               Implementar estructuras de datos en PHP y mostrar información de forma organizada y dinámica.
            </p>
         </div>

         <div class="bg-white p-8 rounded-2xl shadow-md border border-purple-100">
            <h3 class="font-semibold text-lg text-purple-600 mb-2">🛠 Tecnologías Usadas</h3>
            <p class="text-gray-600 text-sm">
               PHP, HTML, Tailwind CSS y un entorno local de desarrollo con servidor web.
            </p>
         </div>

      </div>
   </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
