<?php
  function card(string $title, string $value){
    return <<<HTML
    <div
      class="col bg-secondary rounded-2 py-3 px-4 text-center d-flex flex-column gap-1 shadow">
      <span class="text-start">{$title}</span>
      <span class="fs-1 fw-medium py-4"> {$value} </span>
    </div>
HTML;
  }