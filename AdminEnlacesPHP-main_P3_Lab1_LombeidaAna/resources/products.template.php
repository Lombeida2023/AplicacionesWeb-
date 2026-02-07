<div style="max-width:700px;margin:auto;font-family:'Segoe UI',sans-serif;background:#fff0f5;padding:20px;border-radius:12px;">

<p style="text-align:center;color:#ad1457;font-weight:bold;">
    Total de productos registrados: <?= $totalProducts ?>
</p>

<?php
$success = $_GET['success'] ?? null;
$messages = [
    'created' => 'Producto creado con éxito ',
    'updated' => 'Producto actualizado correctamente ',
    'deleted' => 'Producto eliminado '
];
?>

<?php if ($success && isset($messages[$success])) : ?>
    <div style="background:#fce4ec;color:#ad1457;padding:10px;border-radius:10px;margin-bottom:15px;text-align:center;">
        <?= $messages[$success] ?>
    </div>
<?php endif; ?>

<h1 style="text-align:center;color:#b03060;"> Lista de Productos</h1>

<!--  BUSCADOR -->
<form method="GET" action="/products" style="margin-bottom:15px;text-align:center;">
    <input type="text" name="search" placeholder="Buscar por nombre o SKU"
        value="<?= htmlspecialchars($search ?? '') ?>"
        style="padding:8px;border-radius:20px;border:1px solid #f8bbd0;width:55%;">

    <select name="order" style="padding:8px;border-radius:20px;border:1px solid #f8bbd0;">
        <option value="">Ordenar por</option>
        <option value="asc" <?= ($order ?? '') === 'asc' ? 'selected' : '' ?>>Precio menor</option>
        <option value="desc" <?= ($order ?? '') === 'desc' ? 'selected' : '' ?>>Precio mayor</option>
    </select>

    <button type="submit"
        style="background:#f06292;color:white;border:none;padding:8px 14px;border-radius:20px;">
        Aplicar
    </button>
</form>

<div style="text-align:center;margin-bottom:15px;">
    <a href="/products/create"
       style="background:#ec407a;color:white;padding:8px 14px;border-radius:20px;text-decoration:none;">
       ➕ Nuevo Producto
    </a>
</div>

<hr>

<?php if (empty($products)) : ?>
    <p style="text-align:center;color:#999;margin-top:20px;">
        No hay productos registrados aún 
    </p>
<?php endif; ?>

<?php foreach ($products as $product) : ?>
    <div style="background:white;border-radius:12px;padding:15px;margin-bottom:15px;box-shadow:0 4px 8px rgba(0,0,0,0.05);">
        
        <h3 style="margin:0;color:#ad1457;">
            <?= htmlspecialchars($product['name']) ?>
        </h3>

        <p style="margin:5px 0 10px;color:#555;">
            <?= htmlspecialchars($product['description']) ?>
        </p>

        <span style="background:#f8bbd0;color:#880e4f;padding:4px 8px;border-radius:12px;font-size:12px;">
             $<?= number_format($product['price'], 2) ?>
        </span>

        <span style="background:#fce4ec;color:#ad1457;padding:4px 8px;border-radius:12px;font-size:12px;margin-left:5px;">
            SKU: <?= htmlspecialchars($product['sku']) ?>
        </span>

        <div style="margin-top:10px;">
            <a href="/products/edit?id=<?= $product['id'] ?>"
               style="color:#d81b60;text-decoration:none;font-size:14px;">
               ✏️ Editar
            </a>
        </div>
    </div>
<?php endforeach; ?>

<!--  PAGINACIÓN -->
<?php if ($totalPages > 1) : ?>
<div style="text-align:center;margin-top:20px;">
<?php for ($i = 1; $i <= $totalPages; $i++) : ?>
    <a href="/products?page=<?= $i ?>&search=<?= urlencode($search ?? '') ?>&order=<?= $order ?? '' ?>"
       style="margin:0 5px;padding:6px 12px;border-radius:8px;
       background:<?= $i == $page ? '#ec407a' : '#f8bbd0' ?>;
       color:white;text-decoration:none;">
       <?= $i ?>
    </a>
<?php endfor; ?>
</div>
<?php endif; ?>

</div>
