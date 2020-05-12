<?php

// tipos escalare

// string
$nome = "Olá Mundo!";
var_dump($nome);
print "<br/>";
print "<hr/>";

// int
$idade = 19;
var_dump($idade);
print "<br/>";
print "<hr/>";

// float
$altura = 1.75;
var_dump($altura);
print "<br/>";
print "<hr/>";

// boolean
$admin = true;
var_dump($admin);
print "<br/>";
print "<hr/>";

// tipos compostos

// array

$carros = array("gol", "celta", "ford ka", "cerato", "corolla", 1.54, 124, true);
var_dump($carros);
print "<br/>";
print "<hr/>";

// objeto

class Client
{
  public $nome;

  public function atribuirNome($nome)
  {
    $this->$nome = $nome;
  }
}

$client = new Client();

$client->atribuirNome("Leandro");

var_dump($client);
print "<br/>";
print "<hr/>";

// null

$nomeIrmao = NULL;
