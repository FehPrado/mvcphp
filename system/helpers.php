<?php

function path($path) {
  echo getPath($path);
}

function getPath($path) {
  return HOST . $path;
}

function getDir($dir) {
  return DIR . $dir;
}

function requireDir($dir, $vars = []) {
  extract($vars);
  require_once DIR . $dir . '.php';
}

function render ($yield, $vars = [], $layout = 'application') {
  $vars = array_merge($vars, ['yield' => $yield]);
  requireDir("views/layouts/$layout", $vars);
}

function partial ($yield, $vars) {
  requireDir("views/$yield", $vars);
}

function redirectTo ($path) {
  header('Location: '. getPath($path) );
  die;
}

function endsWith( $haystack, $needle ) {
  $length = strlen( $needle );
  if( !$length ) {
      return true;
  }
  return substr( $haystack, -$length ) === $needle;
}
