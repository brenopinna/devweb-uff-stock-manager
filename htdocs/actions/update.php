<?php
  require_once __DIR__ . '/../src/connect.php';
  if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('location: /');
    exit();
  }
  try {
    $con = connect();

    $id = $_POST['id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "
        UPDATE products
        SET
            name = :name,
            quantity = :quantity,
            category = :category,
            price = :price,
            description = :description
        WHERE id = :id
    ";

    $stmt = $con->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':quantity' => $quantity,
        ':category' => $category,
        ':price' => $price,
        ':description' => $description,
        ':id' => $id
    ]);

    header("location: /details?id=" . $id . "&success");
    exit();
  } catch (\Throwable $th) {
    header("location: /update?id=" . $id . "&error");
    exit();
  }