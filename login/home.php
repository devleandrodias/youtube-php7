<?php
require_once 'db_connect.php';
session_start();

$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuario WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
mysqli_close($connect);

if (!isset($_SESSION['logado'])) :
  header('Location: index.php');
endif;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>

<body>
  <h1>Seja bem vindo <?php print $dados['nome']; ?></h1>
  <a href="logout.php">Sair da aplicação</a>
</body>

</html>
