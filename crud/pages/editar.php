<?php
include_once '../connection/db_connect.php';
include_once '../includes/header.php';

if (isset($_GET['id'])) :
  $id = mysqli_escape_string($connect, $_GET['id']);
  $sql = "SELECT * FROM clientes WHERE id = '$id'";
  $resultado = mysqli_query($connect, $sql);
  $dados = mysqli_fetch_array($resultado);
endif;
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Editar Cliente</h3>
    <form action="../php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php print $dados['id'] ?>">
      <div class="input-field col s12">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="<?php print $dados['nome'] ?>">
      </div>
      <div class="input-field col s12">
        <label for="sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" id="sobrenome" value="<?php print $dados['sobrenome'] ?>" />
      </div>
      <div class="input-field col s12">
        <label for="email">E-mail</label>
        <input type="email" name="email" id="email" value="<?php print $dados['email'] ?> ">
      </div>
      <div class="input-field col s12">
        <label for="idade">Idade</label>
        <input type="text" name="idade" id="idade" value="<?php print $dados['idade'] ?> ">
      </div>
      <button type="submit" name="btn-editar" class="btn">Atualizar</button>
      <a href="../index.php" type="submit" class="btn green">Lista de Cliente</a>
    </form>
  </div>
</div>

<?php include_once '../includes/footer.php'; ?>
