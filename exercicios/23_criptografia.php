<?php

$senha = "13131313aA*";

// Base 64
$novaSenha = base64_encode($senha);
print $novaSenha;
print "<br/>";

print "<hr/>";

// MD5
$senhaMd5 = md5($senha);
print $senhaMd5;
print "<br/>";

print "<hr/>";

// SHA1
$senhaSha1 = sha1($senhaMd5);
print $senhaSha1;
print "<br/>";

print "<hr/>";

// HASH
$senhaHash = password_hash($senha, PASSWORD_BCRYPT);
print $senhaHash;
print "<br/>";

print password_verify($senha, $senhaHash) ? "Senha Correta" : "Senha Inválida";
