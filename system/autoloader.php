<?php

function classAutoLoad ($className) {
  #se terminar com 'Controller' -> pasta = 'controllers
  #se terminar com 'Model' -> pasta = 'models'
  #require onde pasta + className
  requireDir("controllers/$className.php");


}

spl_autoload_register('classAutoLoad');
