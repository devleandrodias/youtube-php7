<?php

/**
 * number_format
 * round
 * floor
 * rand
 */

$db = 12334.23;

$preco = number_format($db, 2, ',', '.');

print "Macbook Air 2017 por R$ $preco" . "<br/>";

print round($preco);
print "<br/>";

print ceil($preco); // Sempre pra cima,
print floor($preco); // Sempre pra baixo,

print rand(0, 10000000000);
