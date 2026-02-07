<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-3xl mx-auto py-16">
   <h1 class="text-4xl font-bold text-pink-700 mb-4">
      <?= $post['titulo'] ?>
   </h1>

   <p class="text-sm text-gray-500 mb-6">
      <?= formatear_info_autor($post) ?>
   </p>

   <p class="text-gray-700 leading-relaxed mb-8 text-justify">
    <?= $post['contenido'] ?>
   </p>


   <div class="text-sm text-gray-600 mb-4">
      Número de palabras: <?= contar_palabras($post['contenido']) ?>
   </div>

   <div class="flex flex-wrap gap-2">
      <?= renderizar_tags_html($post['tags']) ?>
   </div>
</section>

<style>
.tag {
    background-color: #f472b6;
    color: white;
    padding: 4px 10px;
    border-radius: 999px;
    font-size: 12px;
}
</style>

<?php require __DIR__ . '/partials/footer.php'; ?>
