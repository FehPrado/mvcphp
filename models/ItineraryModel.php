<?php

class ItineraryModel {

  static private $attr = [ 'title', 'subtitle' ];
  static private $required = [ 'title' ];

  static function checkAttributes( $params ) {
    return empty( array_diff( self::$attr, array_keys($params) ) );
  }

  static function checkRequired( $params ) {
    $filterdArray = array_intersect_key($params, array_flip(self::$required));
    return count( $filterdArray ) == count( array_filter( $filterdArray ) ) ;
  }

  static function validate ($params) {
    return self::checkAttributes($params) && self::checkRequired($params);
  }
}