<?php require __DIR__ . '/partials/header.php'; ?>

<section class="text-center py-20 bg-gradient-to-b from-pink-50 to-white">
   <h1 class="text-5xl font-bold text-pink-700 mb-6">
      Sistema Web de Gestión de Productos
   </h1>

   <p class="text-lg text-gray-600 max-w-3xl mx-auto mb-10">
      Esta aplicación fue desarrollada como práctica académica para implementar un sistema CRUD
      utilizando <strong>PHP y MySQL</strong>. Permite registrar, visualizar, editar, eliminar y
      buscar productos de forma dinámica mediante una interfaz web moderna.
   </p>

   <div class="flex justify-center gap-4">
      <a href="/products" class="bg-pink-500 text-white px-6 py-3 rounded-full shadow hover:bg-pink-600 transition">
         Administrar productos 
      </a>

      <a href="/about" class="bg-purple-200 text-purple-800 px-6 py-3 rounded-full hover:bg-purple-300 transition">
         Información del proyecto
      </a>
   </div>
</section>

<section class="py-20">
   <div class="max-w-5xl mx-auto grid md:grid-cols-3 gap-8 text-center">
      
      <div class="p-8 bg-white rounded-2xl shadow-md border border-pink-100">
         <h3 class="text-xl font-semibold text-pink-600 mb-3"> Gestión de Datos</h3>
         <p class="text-gray-600 text-sm">
            Implementación de base de datos MySQL para almacenar productos con nombre, descripción,
            precio y código SKU.
         </p>
      </div>

      <div class="p-8 bg-white rounded-2xl shadow-md border border-purple-100">
         <h3 class="text-xl font-semibold text-purple-600 mb-3"> CRUD Completo</h3>
         <p class="text-gray-600 text-sm">
            Funcionalidades para crear, leer, actualizar y eliminar registros desde formularios
            conectados a la base de datos.
         </p>
      </div>

      <div class="p-8 bg-white rounded-2xl shadow-md border border-pink-100">
         <h3 class="text-xl font-semibold text-pink-600 mb-3"> Búsqueda Dinámica</h3>
         <p class="text-gray-600 text-sm">
            Filtro de productos en tiempo real mediante consultas SQL con parámetros seguros.
         </p>
      </div>

   </div>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
