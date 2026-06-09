<?php
  require_once __DIR__ . '/../data/get_table_info.php'; 
  require_once __DIR__ . '/table_row.php';  
  $table_info = get_table_info();
  $products = $table_info ? $table_info : [];
?>
<?php if(count($products) > 0): ?>
  <div class="table-responsive-lg">
    <table class="table table-dark table-borderless table-hover mt-4">
      <thead class="bg-secondary shadow">
        <tr class="align-middle">
          <th class="p-3" scope="col">ID</th>
          <th scope="col">Produto</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Categoria</th>
          <th scope="col">Ações</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ($products as $product): ?>
        <?= table_row($product['name'], $product['id'], $product['quantity'], $product['category']); ?>
      <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>