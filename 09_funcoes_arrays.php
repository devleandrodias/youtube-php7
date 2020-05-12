<?php
// funçōes para arrays

/**
 * is_array($array) - verifica se determinada váriavel é um array
 * in_array($var, $array) - verifica se determinado valor está presente no array
 * array_keys($array) - retorna um novo valor com os indicies do array passado
 * array_values($array) - retorna um novo array com os valores do array passado
 * array_merge($array1, $array2) - agrega o conteudo dos dois arrays
 * array_pop($array) - exclui a última posicao do array
 * array_shift($array) - exclui a primeira posicao do array
 * array_unshift($array, $valor) - adiciona um ou mais elementos no inicio do array
 * array_push($array, $valor) - adiciona um ou mais elementos no final do array
 * array_combine($keys, $array) - Mesca os dois arrays passados
 * array_sum() - calcula a soma dos elementos do array
 * explode("/", "20/02/2020") - transfoma string em array
 * implode("-", $array) - transforma array em string
 */

$carros = array("primaário" => "Veloster", "auxiliar" => "JeepCompass");
$keys = array_keys($carros);

print var_dump(is_array($carros));
print "<br/>";

print var_dump(in_array("Valoster", $carros));
print "<br/>";

print_r($keys);
