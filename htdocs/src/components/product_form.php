<?php
  enum FormMode: int {
    case CREATE = 0;
    case UPDATE = 1;
  }

  function product_form(FormMode $mode, array $product = []){
    $id = $product['id'] ?? 0;
    $name = $product['name'] ?? "";
    $quantity = $product['quantity'] ?? 1;
    $price = $product['price'] ?? 0.01;
    $category = $product['category'] ?? "";
    $description = $product['description'] ?? "";

    [$path, $button_text] = match($mode) {
      FormMode::CREATE => ['create', "Salvar"],
      FormMode::UPDATE => ['update', "Atualizar"],
    };

    $form_id = $mode == FormMode::CREATE ? "create-product" : "";
    $form_action = $mode == FormMode::UPDATE ? "/actions/{$path}.php" : "";
    $input_hidden = $mode == FormMode::UPDATE ? "<input type='hidden' name='id' value={$id}>" : "";

    return <<<HTML
    <div class="gy-4">
      <form id="{$form_id}" action="{$form_action}" method="post">
        {$input_hidden}
        <div class="row row-gap-2">
          <div class="col-12 col-sm-3">
            <label for="name" class="form-label">Nome</label>
            <input
              type="text"
              class="form-control bg-secondary"
              id="name"
              name="name"
              value="{$name}"
              required />
          </div>
          <div class="col-6 col-sm-3">
            <label for="quantity" class="form-label">Quantidade</label>
            <input
              type="number"
              step="1"
              min="1"
              class="form-control bg-secondary"
              id="quantity"
              name="quantity"
              value="{$quantity}"
              required />
          </div>
          <div class="col-6 col-sm-3">
            <label for="price" class="form-label">Preço</label>
            <input
              type="number"
              step="0.01"
              min="0.01"
              class="form-control bg-secondary"
              id="price"
              name="price"
              value="{$price}"
              required />
          </div>
          <div class="col-12 col-sm-3">
            <label for="category" class="form-label">Categoria</label>
            <input
              type="text"
              class="form-control bg-secondary"
              id="category"
              name="category"
              value="{$category}"
              required />
          </div>
        </div>
        <div class="row g-0 mt-4">
          <div class="col-12">
            <label for="description" class="form-label">Descrição</label>
            <textarea
              class="form-control bg-secondary resize-none"
              style="height: 120px; resize: none"
              id="description"
              name="description"
              required>{$description}</textarea
            >
          </div>
        </div>
        <button type="submit" class="btn btn-primary mt-4">{$button_text}</button>
      </form>
    </div>
HTML;
  }
