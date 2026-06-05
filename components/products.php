<?php
  require_once __DIR__ . '/../data/get_cards_info.php';
  require_once __DIR__ . '/card.php';
  $cards_info = get_cards_info();
?>
<?php if($cards_info): ?>
  <div id="products" class="row gap-4 m-0 mt-3">
        <?= card('Diversidade de Produtos', $cards_info['diversity'])  ?>
        <?= card('Inventário Total', $cards_info['total_inventory'])  ?>
        <?= card('Produtos Recentes', $cards_info['recent_products'])  ?>
        <?= card('Produtos Acabando', $cards_info['low_stock_count'])  ?>
        <?php require_once 'table.php'; ?>
      </div>
<?php else: ?>
  <p class="p-0 m-0 mt-3 text-start">Nenhum produto encontrado</p>
<?php endif; ?>