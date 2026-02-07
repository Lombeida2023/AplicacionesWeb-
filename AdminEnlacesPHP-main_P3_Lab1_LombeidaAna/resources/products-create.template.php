<div style="max-width:600px;margin:auto;background:#fff0f5;padding:20px;border-radius:12px;font-family:'Segoe UI',sans-serif;">

<h1 style="text-align:center;color:#b03060;">Crear Producto</h1>

<form method="POST" action="/products/store">

    <label>Nombre</label><br>
    <input type="text" name="name" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <label>Descripción</label><br>
    <textarea name="description"
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"></textarea><br><br>

    <label>Precio</label><br>
    <input type="number" step="0.01" name="price" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <label>SKU</label><br>
    <input type="text" name="sku" required
        style="width:100%;padding:8px;border-radius:8px;border:1px solid #f8bbd0;"><br><br>

    <div style="text-align:center;">
        <button type="submit"
            style="background:#ec407a;color:white;padding:8px 16px;border:none;border-radius:20px;">
            Guardar Producto
        </button>
    </div>

</form>

<br>
<div style="text-align:center;">
    <a href="/products" style="color:#ad1457;text-decoration:none;">⬅ Volver</a>
</div>

</div>
