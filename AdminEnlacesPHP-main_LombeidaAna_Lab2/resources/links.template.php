<?php require __DIR__ . '/partials/header.php'; ?>

<div class="border-b border-pink-200 pb-10 mb-14">
   <h2 class="text-4xl font-bold text-pink-700 sm:text-5xl">
      Arreglos Bidimensionales
   </h2>

   <p class="text-lg text-gray-600 max-w-4xl mt-4">
      Recursos tecnológicos organizados.
   </p>
</div>

<div class="space-y-20">

<?php foreach ($enlacesCategorizados as $categoria => $enlaces): ?>
   
   <section>
      <h2 class="text-3xl font-extrabold text-purple-700 mb-8 border-l-4 border-pink-400 pl-4">
         <?= $categoria ?>
      </h2>

      <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
         
         <?php foreach ($enlaces as $enlace): ?>
            <div class="bg-white border border-pink-100 rounded-2xl shadow-md hover:shadow-xl transition-all duration-300 p-6 flex flex-col justify-between">

               <div>
                  <!-- TÍTULO -->
                  <h3 class="text-lg font-semibold text-pink-600 mb-2">
                     <?= $enlace['titulo']; ?>
                  </h3>

                  <!-- DESCRIPCIÓN -->
                  <p class="text-sm text-gray-500 mb-3">
                     <?= $enlace['descripcion']; ?>
                  </p>

                  <!-- URL -->
                  <p class="text-xs text-gray-400 break-all">
                     <?= $enlace['url']; ?>
                  </p>
               </div>

               <a href="<?= $enlace['url']; ?>" target="_blank"
                  class="mt-6 text-center text-sm font-semibold text-white bg-gradient-to-r from-pink-400 to-purple-400 hover:from-pink-500 hover:to-purple-500 px-4 py-2 rounded-full transition">
                  Visitar página
               </a>

            </div>
         <?php endforeach; ?>

      </div>
   </section>

<?php endforeach; ?>

</div>

<div class="my-20 text-center">
   <a href="/links/create" class="text-sm font-semibold text-pink-700 hover:text-purple-600 transition">
      Registrar nuevo enlace →
   </a>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
