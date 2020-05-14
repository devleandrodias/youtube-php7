<?php
setcookie('user', 'Leandro Dias', time() + 3600);
setcookie('email', 'teste@gmail.com', time() - 3600);
setcookie('ultima_pesquisa', 'Curso arduino robocore', time() + 3600);

print $_COOKIE['ultima_pesquisa'];
