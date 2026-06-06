<?php
  function btn_delete(int $id, string $product){
    return <<<HTML
    <button onclick="deleteProduct({$id}, '{$product}')" class="btn btn-md btn-danger">
        Excluir
    </button>
HTML;
  }