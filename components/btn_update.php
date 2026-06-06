<?php
  function btn_update(int $id){
    return <<<HTML
    <a href="/edit?id={$id}" class="me-2 btn btn-md btn-primary">
        Editar
    </a>
HTML;
  }