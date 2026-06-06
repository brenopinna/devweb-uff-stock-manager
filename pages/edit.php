<?php
  require_once __DIR__ . '/../data/get_product_details.php';

  $id = $_GET['id'];
  $product = get_product_details($id);

  $name = htmlspecialchars($product['name']);
  $category = htmlspecialchars($product['category']);
  $price = $product['price'];
  $description = htmlspecialchars($product['description']);
  $quantity = $product['quantity'];
?>

<?php if(isset($_GET['error'])): ?>
  <div class="position-absolute my-4 w-50 top-0 start-50 translate-middle-x alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Erro na edição do produto!</strong> Recarrege a página e tente novamente.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
<?php endif; ?>

<div class="container gy-4">
  <form action="/data/update.php" method="post">
    <input type="hidden" name="id" value=<?= $id ?>>
    <div class="row g-0 gap-4">
      <div class="col">
        <label for="name" class="form-label">Nome</label>
        <input
          type="text"
          class="form-control bg-secondary"
          id="name"
          name="name"
          value="<?= $name ?>"
          required />
      </div>
      <div class="col">
        <label for="quantity" class="form-label">Quantidade</label>
        <input
          type="number"
          step="1"
          min="1"
          class="form-control bg-secondary"
          id="quantity"
          name="quantity"
          value="<?= $quantity ?>"
          required />
      </div>
      <div class="col">
        <label for="price" class="form-label">Preço</label>
        <input
          type="number"
          step="0.01"
          min="0.01"
          class="form-control bg-secondary"
          id="price"
          name="price"
          value="<?= $price ?>"
          required />
      </div>
      <div class="col">
        <label for="category" class="form-label">Categoria</label>
        <input
          type="text"
          class="form-control bg-secondary"
          id="category"
          name="category"
          value="<?= $category ?>"
          required />
      </div>
    </div>
    <div class="row g-0 mt-4">
      <div class="col">
        <label for="description" class="form-label">Descrição</label>
        <textarea
          class="form-control bg-secondary resize-none"
          style="height: 120px; resize: none"
          id="description"
          name="description"
          required><?= $description ?></textarea
        >
      </div>
    </div>
    <button type="submit" class="btn btn-primary mt-4">Editar</button>
  </form>
</div>
