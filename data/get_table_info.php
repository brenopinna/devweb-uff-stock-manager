<?php
  require_once __DIR__ . '/../connect.php';  
  function get_table_info(){
    try {
      $con = connect();
      $sql = "SELECT products.id, products.name, products.quantity, products.category FROM products;";
      $stmt = $con->prepare($sql);
      $stmt->execute();
      $table_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $table_info;
    } catch (\Throwable $th) {
      return null;
    }
  }