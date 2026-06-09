<?php
  require_once __DIR__ . '/../connect.php';  
  function get_cards_info() {
    try {
      $con = connect();
      $sql = "SELECT
                (SELECT COUNT(DISTINCT products.name) FROM products) AS diversity,
                (SELECT SUM(products.quantity) FROM products) AS total_inventory,
                (SELECT COUNT(*) FROM products WHERE products.created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)) AS recent_products,
                (SELECT COUNT(*) FROM 
                  (SELECT * FROM products WHERE products.quantity < 5) AS low_stock
                ) AS low_stock_count
              FROM products;";
      $stmt = $con->prepare($sql);
      $stmt->execute();
      $cards_info = $stmt->fetch(PDO::FETCH_ASSOC);
      return $cards_info;
    } catch (\Throwable $th) {
      return null;
    }
  }
