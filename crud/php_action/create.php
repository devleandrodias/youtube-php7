 <?php

  require_once '../db_connect.php';

  if (isset($_POST['btn-cadastrar'])) :
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];

    $sql = "INSERT INTO `crud`.`clientes` (`nome`, `sobrenome`, `email`, `idade`)
      VALUES ('$nome','$sobrenome','$email','$idade')";

    print $sql;

    if (mysqli_query($connect, $sql)) :
      header('Location: ../index.php?sucesso');
    else :
      header('Location: ../index.php?erro');
    endif;
  endif;
