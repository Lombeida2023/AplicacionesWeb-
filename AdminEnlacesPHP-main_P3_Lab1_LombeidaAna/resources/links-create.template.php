<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-xl mx-auto py-16">
   <h1 class="text-3xl font-bold text-pink-700 mb-8">Registrar nuevo enlace</h1>

   <form method="POST" action="/links/store" class="space-y-6 bg-white p-8 rounded-xl shadow-md">

      <div>
         <label class="block text-sm font-medium text-gray-700">Título</label>
         <input type="text" name="title" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
      </div>

      <div>
         <label class="block text-sm font-medium text-gray-700">URL</label>
         <input type="url" name="url" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
      </div>

      <div>
         <label class="block text-sm font-medium text-gray-700">Descripción</label>
         <textarea name="description" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
      </div>

      <button type="submit"
         class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition">
         Guardar enlace 💾
      </button>

   </form>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
