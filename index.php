<?php
    require_once 'data/get_cards_info.php';
    require_once 'components/card.php';
    require_once 'components/table.php';
    $cards_info = get_cards_info();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="theme.css" />
    <title>Stock Manager</title>
  </head>
  <body class="d-flex flex-column min-vh-100">
    <header
      class="bg-primary text-white d-flex justify-content-between align-items-center p-4">
      <p class="text-uppercase mb-0 fw-bold">
        <a href="/" class="text-white text-decoration-none">Stock Manager</a>
      </p>
      <nav class="d-flex gap-4">
        <a href="/" class="link-light link-underline-opacity-0 link-opacity-75-hover">Início</a>
        <a href="/produtos" class="link-light link-underline-opacity-0 link-opacity-75-hover">Adicionar Produtos</a>
      </nav>
    </header>
    <main class="text-white flex-grow-1 p-4 bg-primary">
      <h1 class="fw-light">Estoque</h1>
      <?php if($cards_info): ?>
            <div class="row gap-4 m-0 mt-3">
            <?= card('Diversidade de Produtos', $cards_info['diversity'])  ?>
            <?= card('Inventário Total', $cards_info['total_inventory'])  ?>
            <?= card('Produtos Recentes', $cards_info['recent_products'])  ?>
            <?= card('Produtos Acabando', $cards_info['low_stock_count'])  ?>
            <?= table() ?>
            </div>
      <?php else: ?>
          <p class="p-0 m-0 mt-3 text-start">Nenhum produto encontrado</p>
      <?php endif;?>
    </main>
    <footer
      class="bg-primary text-white d-flex justify-content-between align-items-center p-4">
      <p class="m-0">Feito com Bootstrap + PHP! 🐘</p>
      <span
        >Desenvolvido por
        <a href="https://github.com/brenopinna" class="link-light link-opacity-75-hover link-underline-opacity-75" target="_blank"
          >Breno Pinna</a
        >👾</span
      >
    </footer>
    <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>
