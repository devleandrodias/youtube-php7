<?php

$arquivo = '26_manipulando_arquivos.txt';

$conteudo = "Conteudo de teste...\r\n";

$tamnhoArquivo = filesize($arquivo);
$arquivoAberto = fopen($arquivo, 'r');
// fwrite($arquivoAberto, $conteudo);

while (!feof($arquivoAberto)) :
  $linha = fgets($arquivoAberto, $tamnhoArquivo);
  print $linha . "<br/>";
endwhile;

fclose($arquivoAberto);
