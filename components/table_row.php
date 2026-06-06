<?php
  function table_row(string $product, int $id, int $quantity, string $category) {
      require_once __DIR__ . '/btn_details.php';
      require_once __DIR__ . '/btn_update.php';
      require_once __DIR__ . '/btn_delete.php';
      $product = htmlspecialchars($product);
      $category = htmlspecialchars($category);
      $btn_details = btn_details($id);
      $btn_update = btn_update($id);
      $btn_delete = btn_delete($id, $product);

      return <<<HTML
      <tr class="align-middle">
        <th class="p-3" scope="row">{$id}</th>
        <td>{$product}</td>
        <td>{$quantity}</td>
        <td>{$category}</td>
        <td class="w-25">
            {$btn_details}
            {$btn_update}
            {$btn_delete}
        </td>
      </tr>
HTML;
}