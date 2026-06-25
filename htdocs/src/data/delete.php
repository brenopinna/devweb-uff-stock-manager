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
    http_response_code(204);
    exit();
  } catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Falha ao conectar ao banco de dados.']);
    exit();
  } catch (\Throwable $th) {
    http_response_code(500);
    echo json_encode(['success'=> false, 'message' => $th->getMessage() ?: 'Ocorreu um erro ao excluir o produto.']);
    exit();
  }