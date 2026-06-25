<?php
  require_once __DIR__ . '/../data/get_product_details.php';
  require_once __DIR__ . '/../components/product_form.php';

  $id = $_GET['id'];
  $data = get_product_details($id);
  $product = $data['data'] ?? [];
?>

<?php if(isset($_GET['error'])): ?>
  <div class="position-absolute my-4 w-50 top-0 start-50 translate-middle-x alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Erro na edição do produto!</strong> Recarrege a página e tente novamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<?php if(!$data['success']): ?>
  <p class="p-0 text-start">Houve um erro no servidor. Recarregue a página e tente novamente.</p>
<?php elseif($product): ?>
  <?php
    $product['name'] = htmlspecialchars($product['name']);
    $product['category'] = htmlspecialchars($product['category']);
    $product['description'] = htmlspecialchars($product['description']);
  ?>
  <?= product_form(FormMode::UPDATE, $product) ?>
<?php endif; ?>