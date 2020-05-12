<?php
for ($contador = 0; $contador <= 10; $contador++) {
  print "Contador: $contador!" . "<br/>";
}

print "<hr/>";

$arrayNomes = array("Leandro", "Thaísa", "Beatriz");

foreach ($arrayNomes as $key => $nome) {
  print "Na posição [$key] - $nome" . "<br/>";
}
