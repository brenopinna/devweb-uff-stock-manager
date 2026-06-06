<?php
  require_once __DIR__ . '/../connect.php';  
  function get_product_details(int $id){
    try {
      $con = connect();
      $sql = "SELECT * FROM products WHERE products.id = :id;";
      $stmt = $con->prepare($sql);
      $stmt->execute([
        ":id" => $id
      ]);
      $product_details = $stmt->fetch(PDO::FETCH_ASSOC);
      return $product_details;
    } catch (\Throwable $th) {
      return null;
    }
  }