<?php
  require_once __DIR__ . '/../connect.php';  
  if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('location: /');
    exit();
  }
  try {
    $con = connect();

    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    $sql = "INSERT INTO products (name, quantity, category, price, description) VALUES (:name, :quantity, :category, :price, :description);";
    $stmt = $con->prepare($sql);
    $stmt->execute([
      ':name' => $name,
      ':quantity' => $quantity,
      ':category' => $category,
      ':price' => $price,
      ':description' => $description
    ]);
    if($stmt->rowCount()>0) { // isso retorna quantas linhas foram afetadas pela query.
      echo json_encode(['message' => 'O produto foi criado com sucesso.']);
    } else {
      throw new Error();
    }
    exit();
  } catch (\Throwable $th) {
    http_response_code(500);
    echo json_encode(['message' => 'Ocorreu um erro ao criar o produto.']);
    exit();
  }