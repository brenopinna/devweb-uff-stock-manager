<?php require_once __DIR__ . '/../src/components/header.php' ?>
<?php require_once __DIR__ . '/../src/components/product_form.php' ?>
  <h1 class="fw-light">Adicionar Produtos</h1>
  <div class="my-0 mt-3">
    <?= product_form(FormMode::CREATE) ?>
  </div>
<?php require_once __DIR__ . '/../src/components/footer.php' ?>