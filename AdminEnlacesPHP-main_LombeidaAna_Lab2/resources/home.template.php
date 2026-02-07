<?php require __DIR__ . '/partials/header.php'; ?>

<section class="max-w-6xl mx-auto py-16 px-6 text-center">

    <h1 class="text-5xl font-bold text-pink-700 mb-6">
        Proyecto de Aplicaciones Web
    </h1>

    <p class="text-lg text-gray-600 mb-12 max-w-3xl mx-auto">
        Este sitio forma parte de una práctica académica enfocada en el uso de 
        <strong>PHP para la manipulación de arreglos asociativos y funciones personalizadas</strong>,
        permitiendo procesar información antes de mostrarla dinámicamente en una página web.
    </p>

    <!-- BOTONES DE NAVEGACIÓN -->
    <div class="flex justify-center gap-6 mb-14 flex-wrap">
        <a href="/links"
           class="bg-pink-400 hover:bg-pink-500 text-white px-7 py-3 rounded-xl shadow transition">
            Ver enlaces por categoría 💕
        </a>

        <a href="/post"
           class="bg-purple-400 hover:bg-purple-500 text-white px-7 py-3 rounded-xl shadow transition">
            Ver artículo del proyecto 📄
        </a>

        <a href="/dashboard"
           class="bg-indigo-400 hover:bg-indigo-500 text-white px-7 py-3 rounded-xl shadow transition">
            Ver Dashboard 📊
        </a>
    </div>

    <!-- TARJETAS -->
    <div class="grid md:grid-cols-3 gap-8 text-left">

        <div class="bg-white p-7 rounded-2xl shadow-md border border-pink-100 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-pink-600 mb-3">
                📚 Organización de Datos
            </h3>
            <p class="text-gray-600 leading-relaxed">
                Uso de arreglos asociativos en PHP para estructurar la información de forma clara,
                organizada y reutilizable.
            </p>
        </div>

        <div class="bg-white p-7 rounded-2xl shadow-md border border-purple-100 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-purple-600 mb-3">
                ⚙️ Lógica y Presentación
            </h3>
            <p class="text-gray-600 leading-relaxed">
                Separación entre controladores y vistas, aplicando buenas prácticas
                para un código más limpio y mantenible.
            </p>
        </div>

        <div class="bg-white p-7 rounded-2xl shadow-md border border-indigo-100 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold text-indigo-600 mb-3">
                💡 PHP Dinámico
            </h3>
            <p class="text-gray-600 leading-relaxed">
                Generación dinámica de contenido HTML mediante variables, funciones
                y estructuras de control propias de PHP.
            </p>
        </div>

    </div>

</section>

<?php require __DIR__ . '/partials/footer.php'; ?>
