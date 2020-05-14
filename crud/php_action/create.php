 <?php
  require_once '../connection/db_connect.php';
  session_start();

  if (isset($_POST['btn-cadastrar'])) :
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $sql = "INSERT INTO `crud`.`clientes` (`nome`, `sobrenome`, `email`, `idade`)
      VALUES ('$nome','$sobrenome','$email','$idade')";

    print $sql;

    if (mysqli_query($connect, $sql)) :
      $_SESSION['mensagem'] = 'Novo cliente cadastrado com sucesso!';
      header('Location: ../index.php');
    else :
      $_SESSION['mensagem'] = 'Erro ao cadastrar novo cliente.';
      header('Location: ../index.php');
    endif;
  endif;
