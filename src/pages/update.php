<?php
  require_once __DIR__ . '/../data/get_product_details.php';
  require_once __DIR__ . '/../components/product_form.php';

  $id = $_GET['id'];
  $product = get_product_details($id);

  $product['name'] = htmlspecialchars($product['name']);
  $product['category'] = htmlspecialchars($product['category']);
  $product['description'] = htmlspecialchars($product['description']);
?>

<?php if(isset($_GET['error'])): ?>
  <div class="position-absolute my-4 w-50 top-0 start-50 translate-middle-x alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Erro na edição do produto!</strong> Recarrege a página e tente novamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?= product_form(FormMode::UPDATE, $product) ?>