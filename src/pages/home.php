<?php
  require_once __DIR__ . '/../data/get_cards_info.php';
  require_once __DIR__ . '/../components/card.php';
  $cards_info = get_cards_info();
?>
<?php if($cards_info): ?>
  <div class="row gap-4 g-0">
    <?= card('Diversidade de Produtos', $cards_info['diversity'])  ?>
    <?= card('Inventário Total', $cards_info['total_inventory'])  ?>
    <?= card('Produtos Recentes', $cards_info['recent_products'])  ?>
    <?= card('Produtos Acabando', $cards_info['low_stock_count'])  ?>
  </div>
  <?php require_once __DIR__ . '/../components/table.php'; ?>
<?php else: ?>
  <p class="p-0 text-start">Nenhum produto encontrado. Para adicionar produtos e iniciar o gerenciamento do seu estoque, <a href="/new" class="link-light">clique aqui</a>.</p>
<?php endif; ?>