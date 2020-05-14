<?php
include_once 'messages/mensagens.php';
include_once 'includes/header.php';
include_once 'connection/db_connect.php';
?>

<div class="row">
  <div class="col s12 m6 push-m3">
    <h3 class="light">Clientes</h3>
    <?php
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($connect, $sql);

    if (mysqli_num_rows($resultado) > 0) :
    ?>
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
          while ($dados = mysqli_fetch_array($resultado)) : ?>

            <tr>
              <td><?php print $dados['nome'] ?></td>
              <td><?php print $dados['sobrenome'] ?></td>
              <td><?php print $dados['email'] ?></td>
              <td><?php print $dados['idade'] ?></td>
              <td>
                <a href="./pages/editar.php?id=<?php print $dados['id']; ?>" class="btn-floating orange">
                  <i class="material-icons">edit</i>
                </a>
              </td>
              <td>
                <a href="#modal<?php print $dados['id']; ?>" class="btn-floating red modal-trigger">
                  <i class="material-icons">delete</i>
                </a>
              </td>
              <div id="modal<?php print $dados['id']; ?>" class="modal">
                <div class="modal-content">
                  <h4>Opa!</h4>
                  <p>Tem certeza que deseja excluir esse cliente?</p>
                </div>
                <div class="modal-footer">
                  <form action="./php_action/delete.php" method="POST">
                    <button type="submit" name="btn-deletar" class="btn red">Sim quero excuir!</button>
                    <a href="#!" class="modal-close waves-effect waves-green btn">Cancelar</a>
                    <input type="hidden" name="id" value="<?php print $dados['id']; ?>">
                  </form>
                </div>
              </div>
            </tr>
          <?php
          endwhile;
        else : ?>
          <span class="light">Não há registros para serem exibidor</span>
        <?php
        endif;
        ?>
        </tbody>
      </table>
      <br>
      <a href="./pages/adicionar.php" class="btn">Adicionar Cliente</a>
  </div>
</div>

<?php include_once 'includes/footer.php'; ?>
