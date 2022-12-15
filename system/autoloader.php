<?php

function classAutoLoad ($className) {
  if (endsWith($className, 'Controller')) $folder = 'controllers';
  if (endsWith($className, 'Model')) $folder = 'models';
  if (!$folder) return;
  requireDir("$folder/$className");
}

spl_autoload_register('classAutoLoad');
