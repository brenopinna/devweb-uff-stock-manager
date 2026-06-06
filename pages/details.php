<?php
  require_once __DIR__ . '/../data/get_product_details.php';
  require_once __DIR__ . '/../components/btn_update.php';
  require_once __DIR__ . '/../components/btn_delete.php';
  require_once __DIR__ . '/../components/tag.php';

  $id = $_GET['id'];
  $product = get_product_details($id);

  $currency_formatter = new NumberFormatter('pt_BR', NumberFormatter::CURRENCY);
  
  $name = htmlspecialchars($product['name']);
  $category = htmlspecialchars($product['category']);
  $price = numfmt_format_currency($currency_formatter, $product['price'], "BRL");
  $description = htmlspecialchars($product['description']);
  $modified_at = (new DateTime($product['modified_at']))->format("d/m/Y, H:i:s");
  $quantity = $product['quantity'];
  
  $btn_update = btn_update($id);
  $btn_delete = btn_delete($id, $name);

  $tags = [
    tag("Categoria: " . $category), 
    tag("Valor Unitário: " . $price),
    tag("Em estoque: " . $quantity)
  ];
?>
<div class="d-flex align-items-center">
  <h2 class="fw-light me-5"><?= $product['name'] ?></h2>
  <?= $btn_update ?>
  <?= $btn_delete ?>
</div>
<div class="d-flex gap-4 mt-4">
  <?php foreach ($tags as $tag): ?>
    <?= $tag ?>
  <?php endforeach; ?>
</div>
<p class="mt-4"><?= $description ?></p>
<p class="mt-4">Modificado pela última vez em: <?= $modified_at ?></p>