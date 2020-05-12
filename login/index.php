<?php
// Botão enviar
if (isset($_POST['btn-entrar'])) :
  print "Clicou";
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema Login</title>
</head>

<body>
  <h1>Login</h1>
  <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
    <label>Login</label>
    <input type="text" name="login">
    <br />
    <br />
    <label>Senha</label>
    <input type="password" name="senha">
    <br />
    <br />
    <button type="submit" class="btn-entrar">Entrar</button>
  </form>
</body>

</html>
