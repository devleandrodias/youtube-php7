<?php
// Conexão com banco de dados

$host = "localhost";
$user = "root";
$password = "root";
$db_name = "sistema_login";
$port = 8889;

$connect = mysqli_connect($host, $user, $password, $db_name, $port);

if (!mysqli_connect_errno()) :
  print "Conexão realizada com sucesso!";
endif;
