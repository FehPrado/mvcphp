<?php

class PagesController extends ApplicationController{
  static function index () {
    $vars['title'] = 'HELLO FROM THE OTHER SIDE';

    self::render('pages/index', $vars);
  }

  static function new () {
    echo 'NEW';
  }
}