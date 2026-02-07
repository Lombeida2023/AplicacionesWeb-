<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-xl mx-auto py-16">
    <h1 class="text-3xl font-bold text-pink-700 mb-8">Registrar nuevo enlace</h1>

    <?php if (!empty($errors)): ?>
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
            <ul class="list-disc ml-5">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form method="POST" action="/links/create" class="space-y-6 bg-white p-8 rounded-xl shadow-md">

        <div>
            <label class="block text-sm font-medium text-gray-700">Título</label>
            <input type="text" name="title" value="<?= $_POST['title'] ?? '' ?>" required 
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">URL</label>
            <input type="url" name="url" value="<?= $_POST['url'] ?? '' ?>" required 
                   class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Descripción</label>
            <textarea name="description" required 
                      class="mt-1 block w-full rounded-md border-gray-300 shadow-sm border p-2"><?= $_POST['description'] ?? '' ?></textarea>
        </div>

        <button type="submit" class="w-full bg-pink-500 text-white py-2 rounded-lg hover:bg-pink-600 transition font-bold">
            Guardar enlace 💾
        </button>

    </form>
</section>

<?php require __DIR__ . '/partials/footer.php'; ?>