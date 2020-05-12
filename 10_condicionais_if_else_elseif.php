<?php

/**
 * Condicionais
 * If, Else, ElseIf
 */

$numero = 50;

if ($numero == 10) :
  print "é igual a 10";
elseif ($numero <= 9) :
  print "é menor ou igual a 9";
else :
  print "é diferente de 10";
endif;

print "<hr/>";

$media = 7;

print ($media >= 7) ? "Aprovado!" : "Reprovado!";
