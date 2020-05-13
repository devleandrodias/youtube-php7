<?php
// Conexão com banco de dados
require_once 'db_connect.php';

// Seção
session_start();

// Botão enviar
if (isset($_POST['btn-entrar'])) :
  $erros = array();

  $login = mysqli_escape_string($connect, $_POST['login']);
  $senha = mysqli_escape_string($connect, $_POST['senha']);

  if (empty($login) or empty($senha)) :
    $erros[] = "<li> login e/ou senha precisam estar preenchidos </li>";
  endif;
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
  <?php
  if (!empty($erros)) :
    foreach ($erros as $erro) :
      print $erro;
    endforeach;
  else :
    $sql = "SELECT login FROM usuario WHERE login = '$login'";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) == 0) :
      $erro[] = "<li> usuário inexistente </li>";
    else :
      $sql = "SELECT login FROM usuario WHERE login = '$login' AND senha = '$senha'";
      $resultado = mysqli_query($connect, $sql);

      if (mysqli_num_rows($resultado) == 1) :
        $dados = mysqli_fetch_array($resultado);
        $_SESSION['logado'] = true;
        $_SESSION['id_usuario'] = $dados['id'];
        header('Location: home.php');
      else :
        $erro[] = "<li> senha inválida </li>";
      endif;
    endif;
  endif;

  ?>
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
    <button type="submit" name="btn-entrar">Entrar</button>
  </form>
</body>

</html>
