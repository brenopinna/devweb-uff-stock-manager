<?php
  function btn_details(int $id){
    return <<<HTML
    <a href="/details?id={$id}" class="me-2 btn btn-md btn-light">
        Ver
    </a>
HTML;
  }