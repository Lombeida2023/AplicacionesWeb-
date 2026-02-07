<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-5xl mx-auto py-16">

   <h1 class="text-4xl font-bold text-pink-700 mb-10">Gestión de Enlaces</h1>

   <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">

      <?php foreach ($links as $enlace): ?>
         <div class="bg-white border border-pink-100 rounded-2xl shadow-md p-6 flex flex-col justify-between">

            <div>
               <h3 class="text-lg font-semibold text-pink-600 mb-2">
                  <?= htmlspecialchars($enlace['title']); ?>
               </h3>

               <p class="text-sm text-gray-500 mb-2 break-all">
                  <?= htmlspecialchars($enlace['url']); ?>
               </p>

               <p class="text-sm text-gray-600">
                  <?= htmlspecialchars($enlace['description']); ?>
               </p>
            </div>

            <div class="mt-4 flex justify-between items-center text-sm">

               <a href="<?= htmlspecialchars($enlace['url']); ?>" target="_blank"
                  class="text-purple-600 hover:text-purple-900 font-semibold">
                  🌍 Visitar
               </a>

               <a href="/links/edit?id=<?= $enlace['id']; ?>"
                  class="text-indigo-600 hover:text-indigo-900 font-semibold">
                  ✏️ Editar
               </a>

               <form method="POST" action="/links/delete"
                     onsubmit="return confirm('¿Eliminar este enlace?');">
                  <input type="hidden" name="id" value="<?= $enlace['id']; ?>">
                  <button type="submit" class="text-red-600 hover:text-red-900 font-semibold">
                     🗑 Eliminar
                  </button>
               </form>

            </div>

         </div>
      <?php endforeach; ?>

   </div>

   <div class="mt-12 text-center">
      <a href="/links/create"
         class="text-sm font-semibold text-pink-700 hover:text-purple-600 transition">
         Registrar nuevo enlace →
      </a>
   </div>

</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
