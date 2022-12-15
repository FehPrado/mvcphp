<?php

$route = rtrim($_SERVER['REQUEST_URI'], '/');
if (!$route) $route = 'root';

$routes = [
  //controllers
  'root' => 'PagesController::index',
  
  '/new' => 'PagesController::new',
  
  '/itinerary' => 'ItineraryController::index',
  '/itinerary/new' => 'ItineraryController::new',
  '/itinerary/show' => 'ItineraryController::show',
  '/itinerary/create' => 'ItineraryController::create',

];

call_user_func( $routes[ $route ] );