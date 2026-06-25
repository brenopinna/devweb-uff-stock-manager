<?php
  require_once __DIR__ . '/../data/get_product_details.php';
  require_once __DIR__ . '/../components/btn_update.php';
  require_once __DIR__ . '/../components/btn_delete.php';
  require_once __DIR__ . '/../components/tag.php';

  $id = $_GET['id'];
  $data = get_product_details($id);
  $product = $data['data'] ?? [];
?>

<?php if(isset($_GET['success'])): ?>
  <div class="position-absolute my-4 w-50 top-0 start-50 translate-middle-x alert alert-success alert-dismissible fade show" role="alert">
    <strong>Produto editado com sucesso!</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if(!$data['success']): ?>
  <p class="p-0 text-start">Houve um erro no servidor. Recarregue a página e tente novamente.</p>
<?php elseif($product): ?>
  <?php
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
  <div class="d-flex align-items-center flex-wrap column-gap-5">
    <h2 class="fw-light"><?= $product['name'] ?></h2>
    <div class="d-flex gap-3">
      <?= $btn_update ?>
      <?= $btn_delete ?>
    </div>
  </div>
  <div class="d-flex gap-4 mt-4 flex-wrap">
    <?php foreach ($tags as $tag): ?>
      <?= $tag ?>
    <?php endforeach; ?>
  </div>
  <p class="mt-4"><?= $description ?></p>
  <p class="mt-4">Modificado pela última vez em: <?= $modified_at ?></p>
<?php endif; ?>