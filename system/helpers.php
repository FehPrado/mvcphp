<?php

function path($path) {
  echo HOST . $path;
}

function getPath($path) {
  return HOST . $path;
}

function getDir($dir) {
  return DIR . $dir;
}

function requireDir($dir, $vars = []) {
  extract($vars);
  require_once DIR . $dir;
}