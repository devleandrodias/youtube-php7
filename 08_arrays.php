<?php
// arrays

$carros = array("Valoster", "JeepCompass");
$carros[] = "Cronos";

$clientes = ["Thaísa", "Beatriz"];

print_r($carros);
print "<br/>";

print $carros[1];
print "<br/>";

print $carros[2];
print "<br/>";

print_r($clientes);
print "<br/>";

// count

$totalCarros = count($carros);
print "Total de carros: $totalCarros";
print "<br/>";

// foreach

foreach ($carros as $valor) {
  print $valor . "<br/>";
}

// arrays associativos

$pessoa = array("nome" => "Leandro", "idade" => 19, "altura" => 1.75);
$pessoa["cidade"] = "São Paulo";
print($pessoa["cidade"]);
print "<br/>";

foreach ($pessoa as $indicie => $valor) {
  print "$indicie : $valor <br/>";
}

// arrays multidimencionais

$times = array(
  "paulistas" => array("São Paulo", "Palmeiras"),
  "cariocas" => array("vasco", "flamengo")
);

print_r($times);
print "<br/>";
print_r($times["paulistas"][0]);
