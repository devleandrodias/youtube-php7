<?php

/**
 * strtoupper - caixa alta
 * strtolower - caixa baixa
 * substr - substring
 * str_pad - complemento de string
 * str_repeat
 * str_replace
 * strlen
 * strpos
 */

$nome = "leandroo";
$frase = "Lorem ipsum dolor sit amet consectetur adipisicing elit.";

print strtoupper($nome);
print "<br/>";

print strtolower($nome);
print "<br/>";

print substr($nome, 4, 2); // string, apartir do caractere x, comprimento x
print "<br/>";

print str_pad($nome, 10, "*", STR_PAD_BOTH);
print "<br/>";

print str_repeat("Sucesso!", 5);
print "<br/>";

print strlen("Sucesso!");
print "<br/>";

print str_replace("!", "#", "Sucesso!");
print "<br/>";

print strpos($frase, "consectetur");
print "<br/>";
