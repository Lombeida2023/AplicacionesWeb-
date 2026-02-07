
<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-xl mx-auto py-16">
   <h1 class="text-3xl font-bold text-purple-700 mb-8">Editar enlace</h1>

   <form method="POST" action="/links/update" class="space-y-6 bg-white p-8 rounded-xl shadow-md">

      <input type="hidden" name="id" value="<?= $link['id'] ?>">

      <div>
         <label class="block text-sm font-medium text-gray-700">Título</label>
         <input type="text" name="title" value="<?= $link['title'] ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
      </div>

      <div>
         <label class="block text-sm font-medium text-gray-700">URL</label>
         <input type="url" name="url" value="<?= $link['url'] ?>" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
      </div>

      <div>
         <label class="block text-sm font-medium text-gray-700">Descripción</label>
         <textarea name="description" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"><?= $link['description'] ?></textarea>
      </div>

      <button type="submit"
         class="w-full bg-purple-600 text-white py-2 rounded-lg hover:bg-purple-700 transition">
         Actualizar enlace ✏️
      </button>

   </form>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
