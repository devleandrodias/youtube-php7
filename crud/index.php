<?php
include_once 'messages/mensagens.php';
include_once 'includes/header.php';
include_once 'connection/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <table class="striped ">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Email</th>
          <th>Idade</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM clientes";
        $resultado = mysqli_query($connect, $sql);

        while ($dados = mysqli_fetch_array($resultado)) : ?>

          <tr>
            <td><?php print $dados['nome'] ?></td>
            <td><?php print $dados['sobrenome'] ?></td>
            <td><?php print $dados['email'] ?></td>
            <td><?php print $dados['idade'] ?></td>
            <td><button type="button" class="btn-floating orange"><i class="material-icons">edit</i></button></td>
            <td><button type="button" class="btn-floating red"><i class="material-icons">delete</i></button></td>
          </tr>

        <?php endwhile; ?>
      </tbody>
    </table>
    <br>
    <a href="./pages/adicionar.php" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
