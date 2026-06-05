<?php
  function table_row(string $product, int $id, int $quantity, string $category) {
      $product = htmlspecialchars($product);
      $category = htmlspecialchars($category);

      return <<<HTML
      <tr class="align-middle">
        <th class="p-3" scope="row">{$id}</th>
        <td>{$product}</td>
        <td>{$quantity}</td>
        <td>{$category}</td>
        <td class="w-25">
            <a href="#" class="me-2 btn btn-md btn-light">
                Ver
            </a>

            <a href="#" class="me-2 btn btn-md btn-primary">
                Editar
            </a>

            <form
                method="POST"
                action="delete.php"
                class="d-inline"
                onsubmit="return confirm('Tem certeza que deseja excluir ({$id}) {$product}?');"
            >
                <input type="hidden" name="id" value="$id">

                <button type="submit" class="btn btn-md btn-danger">
                    Excluir
                </button>
            </form>
        </td>
      </tr>
HTML;
}