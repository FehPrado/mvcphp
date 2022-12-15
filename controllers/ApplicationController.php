<?php

class ApplicationController {

  function render ($view, $vars = []) {
    requireDir("views/$view.php", $vars);
  }

  
}