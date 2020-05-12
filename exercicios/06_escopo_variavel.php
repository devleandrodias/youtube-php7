<?php

// escopo global
$nome = "Leandro Dias";
$a = 1;
$b = 3;
$c = 7;

function exibirNome()
{
  // escopo local
  global $nome;
  print $nome;
}

exibirNome();

print "<hr/>";

function exibiCidade()
{
  global $cidade;
  $cidade = "Rio de Janeiro";
}

function somar()
{
  print $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

exibiCidade();
print $cidade;
print "<hr/>";

somar();
