<?php
  function table(){
    require_once 'data/get_table_info.php';
    require_once 'components/table_row.php';
    $table_info = get_table_info();
    $products = $table_info ? $table_info : [];
    $rows = "";
    foreach($products as $product){
    $rows .= table_row($product['name'], $product['id'], $product['quantity'], $product['category']);
    }
    if(count($products) > 0) {
      return <<<HTML
        <div>
          <table class="table table-dark table-borderless table-hover mt-4">
            <thead class="bg-secondary shadow">
              <tr class="align-middle">
                <th class="p-3" scope="col">ID</th>
                <th scope="col">Produto</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
            {$rows}
            </tbody>
          </table>
        </div>
HTML;
    }
  }