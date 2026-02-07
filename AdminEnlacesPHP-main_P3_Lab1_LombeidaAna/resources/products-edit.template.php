<div style="max-width:600px;margin:auto;background:#fff0f5;padding:20px;border-radius:12px;font-family:'Segoe UI',sans-serif;">

<h1 style="text-align:center;color:#b03060;">Editar Producto</h1>

<form method="POST" action="/products/update">

    <input type="hidden" name="id" value="<?= $product['id'] ?>">

    <label>Nombre</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($product['name']) ?>" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <label>Descripción</label><br>
    <textarea name="description"
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><?= htmlspecialchars($product['description']) ?></textarea><br><br>

    <label>Precio</label><br>
    <input type="number" step="0.01" name="price" value="<?= $product['price'] ?>" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <label>SKU</label><br>
    <input type="text" name="sku" value="<?= htmlspecialchars($product['sku']) ?>" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <div style="text-align:center;">
        <button type="submit"
            style="background:#ec407a;color:white;padding:8px 16px;border:none;border-radius:20px;">
            Actualizar
        </button>
    </div>

</form>

<hr>

<form method="POST" action="/products/delete" onsubmit="return confirm('¿Eliminar producto?');">
    <input type="hidden" name="id" value="<?= $product['id'] ?>">
    <div style="text-align:center;">
        <button type="submit"
            style="background:#d81b60;color:white;padding:6px 12px;border:none;border-radius:20px;">
            🗑 Eliminar
        </button>
    </div>
</form>

<br>
<div style="text-align:center;">
    <a href="/products" style="color:#ad1457;text-decoration:none;">⬅ Volver</a>
</div>

</div>
