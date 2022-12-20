<?php

define('HOST', 'http://localhost:8001/');
define('DIR', '//home/compliasset/mvcphp/');

#configs de banco
#host
#user
#pass
#database

$host = 'localhost';
$user = 'root';
$password = '123456789';
$database = 'full';

//fazendo a coneção com o banco
$conecta = mysqli_connect($host, $user, $password, $database);

//verificando se o banco ta funcionando
// if (!$conecta){
//   die("Falha ao conectar: ". mysqli_connect_error());
// }else{
//   echo("Conectado com sucesso!!");
//   mysqli_close($conecta);
// }

