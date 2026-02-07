<?php require __DIR__ . '/partials/header.php'; ?>

<section class="text-center py-20 bg-gradient-to-b from-pink-50 to-white">
   <h1 class="text-5xl font-bold text-pink-700 mb-6">
      Sistema de Gestión de Enlaces
   </h1>

   <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-10">
      Esta aplicación fue desarrollada como práctica académica para implementar un sistema CRUD
      utilizando PHP y base de datos. Permite registrar nuevos enlaces, visualizarlos en una lista,
      editarlos y eliminarlos, aplicando una estructura organizada basada en el patrón MVC.
   </p>

   <div class="flex justify-center gap-4">
      <a href="/links" class="bg-pink-500 text-white px-6 py-3 rounded-full shadow hover:bg-pink-600 transition">
         Ver lista de enlaces 📚
      </a>

      <a href="/links/create" class="bg-purple-200 text-purple-800 px-6 py-3 rounded-full hover:bg-purple-300 transition">
         Registrar nuevo enlace ➕
      </a>
   </div>
</section>

<section class="py-20">
   <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 text-center">
      
      <div class="p-8 bg-white rounded-2xl shadow-md border border-pink-100">
         <h3 class="text-xl font-semibold text-pink-600 mb-3">📄 Gestión de Registros</h3>
         <p class="text-gray-600 text-sm">
            Los enlaces se almacenan en una base de datos y se muestran dinámicamente en la aplicación.
         </p>
      </div>

      <div class="p-8 bg-white rounded-2xl shadow-md border border-purple-100">
         <h3 class="text-xl font-semibold text-purple-600 mb-3">⚙️ Operaciones CRUD</h3>
         <p class="text-gray-600 text-sm">
            El sistema permite Crear, Leer, Actualizar y Eliminar enlaces mediante formularios y consultas SQL.
         </p>
      </div>

      <div class="p-8 bg-white rounded-2xl shadow-md border border-pink-100">
         <h3 class="text-xl font-semibold text-pink-600 mb-3">🧩 Arquitectura MVC</h3>
         <p class="text-gray-600 text-sm">
            Separación entre la lógica del controlador, la conexión a la base de datos y la presentación visual.
         </p>
      </div>

   </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
