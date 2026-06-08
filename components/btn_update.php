<?php
  function btn_update(int $id){
    return <<<HTML
    <a href="/edit?id={$id}" class="btn btn-md btn-primary">
        Editar
    </a>
HTML;
  }