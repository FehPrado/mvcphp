<?php

class RouterControllers extends ApplicationController{
  static function index(){
    $vars['title'] = 'TOP ROUTERS';

    self::render('routers/index', $vars);

  }
}