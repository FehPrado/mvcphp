<?php

class ItineraryController {
  static function index(){
    $title = 'TOP ROUTERS';

    render('itinerary/index', get_defined_vars());

  }

  static function new(){
    render('itinerary/new', get_defined_vars());
  }

  static function create () {
    extract($_POST);


    if (ItineraryModel::validate($_POST)) {
      #queries para salvar no banco

    }

    
    #se salvar
    #redireciona para show
      redirectTo('itinerary/show');

    #se não salvar
      #renderiza o new e exibe o erro
      // $error = "Título não é válido";
      // render('itinerary/new', get_defined_vars());
  }

  static function show () {
    echo 'show';
  }
}