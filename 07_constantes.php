<?php
// constantes, nao mudam seu valor e automaticamente sao globais

define("NOME", "José Carlos");
define("IDADE", 19);

print NOME;
print "<br/>";
print IDADE;
print "<br/>";

print 'Meu nome é ' . NOME . ' e tenho ' . IDADE . ' anos';
print "<hr/>";

define("TIMES", ["Vasco", "Atletico", "Palmeiras"]);
print(TIMES[1]);
