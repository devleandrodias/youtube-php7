<?php

function exibirNome($nome)
{
  print "Meu nome é ${nome}";
}

exibirNome("Adriele Santos");

function calcularMedia($valor1, $valor2, $nome)
{
  $media = round(($valor1 + $valor2) / 2);
  print "O aluno ${nome} teve média: ${media}";
}

print "<br/>";
calcularMedia(7.4, 2.7, "Thaísa");
print "<br/>";

calcularMedia(6.3, 1.3, "Beatriz");
print "<br/>";

calcularMedia(2.8, 9.3, "Leandro");
print "<br/>";
