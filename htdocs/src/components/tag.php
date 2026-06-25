<?php
  function tag(string $text){
    return <<<HTML
      <span class="bg-secondary shadow py-2 px-3 rounded-2">{$text}</span>
HTML;
  }