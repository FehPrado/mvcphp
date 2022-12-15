<?php

$route = $_SERVER['REQUEST_URI'];

$routes = [
  //controllers
  '/' => 'PagesController::index',
  '/new' => 'PagesController::new',
  '/routers' => 'RouterControllers::index',

];

call_user_func( $routes[ $route ] );