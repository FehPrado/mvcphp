<?php

class PagesController {
  static function index () {
    $title = 'HELLO FROM HELL';
    $subtitle = 'BLA BLA BLA';

    render('pages/index', get_defined_vars());
  }

  static function new () {
    echo 'NEW';
  }
}