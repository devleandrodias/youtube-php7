<?php

$contador = 0;

while ($contador <= 10) :
  print "Contador: $contador!" . "<br/>";
  $contador++;
endwhile;

print "<hr/>";

$contador = 0;

do {
  print "Contador: $contador!" . "<br/>";
  $contador++;
} while ($contador <= 10);
