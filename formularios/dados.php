<?php

$nome = $_POST['nome'];
$email = $_POST['email'];

print "Olá Sr. ${nome}, foi enviado um email para ${email} <br/>";
print "Olá Sr. " . $_POST['nome'] . ", foi enviado um email para " . $_POST['email'];
