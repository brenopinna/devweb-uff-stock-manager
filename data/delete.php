<?php
  require_once __DIR__ . '/../connect.php';  
  if($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('location: /');
    exit();
  }
  try {
    $con = connect();
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id = :id";
    $stmt = $con->prepare($sql);
    $stmt->execute([':id' => $id]);
  } catch (\Throwable $th) {
    http_response_code(500);
    echo json_encode(['message' => 'Ocorreu um erro ao excluir o produto.']);
    exit();
  }