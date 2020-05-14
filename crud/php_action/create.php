 <?php
  session_start();

  require_once '../connection/db_connect.php';

  function clear($input)
  {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
  }

  if (isset($_POST['btn-cadastrar'])) :
    $nome = clear($_POST['nome']);
    $sobrenome = clear($_POST['sobrenome']);
    $email = clear($_POST['email']);
    $idade = clear($_POST['idade']);

    $sql = "INSERT INTO `clientes` (`nome`, `sobrenome`, `email`, `idade`)
      VALUES ('$nome','$sobrenome','$email','$idade')";

    if (mysqli_query($connect, $sql)) :
      $_SESSION['mensagem'] = 'Novo cliente cadastrado com sucesso!';
      header('Location: ../index.php');
    else :
      $_SESSION['mensagem'] = 'Erro ao cadastrar novo cliente.';
      header('Location: ../index.php');
    endif;
  endif;
