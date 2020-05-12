<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário</title>
</head>

<body>
  <?php
  /**
   * Validaçōes
   * Funçōes (filter_input, filter_var)
   * FILTER_VALIDATE_INT
   * FILTER_VALIDATE_EMAIL
   * FILTER_VALIDATE_FLOAT
   * FILTER_VALIDATE_IP
   * FILTER_VALIDATE_URL
   *
   * Sanitização (Filtros de limpeza)
   * FILTER_SANITIZE_SPECIAL_CHARS
   * FILTER_SANITIZE_INT
   * FILTER_SANITIZE_EMAIL
   * FILTER_SANITIZE_URL
   */

  // Sanitização
  $erros = array();

  $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS); // Não deixa incluir html na página
  print "$nome <br/>";

  $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

  if (!filter_var($idade, FILTER_VALIDATE_INT)) :
    $erros[] = "A idade precisa ser um inteiro";
  endif;

  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
  print "$email <br/>"; // Aplicar validação de input_var

  $peso = filter_input(INPUT_POST, 'peso', FILTER_SANITIZE_NUMBER_FLOAT);
  print "$peso <br/>"; // Aplicar validação de input_var

  $url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);
  print "$url <br/>"; // Aplicar validação de input_var

  // Validaçōes

  if (isset($_POST['enviar-formulario'])) :
    $erros = array();

    if (!$_POST['idade'] = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) :
      $erros[] = 'Idade precisa ser um inteiro';
    endif;

    if (!$_POST['email'] = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_INT)) :
      $erros[] = 'Email precisa ser válido';
    endif;

    if (!$_POST['peso'] = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_INT)) :
      $erros[] = 'Peso precisa ser um número';
    endif;

    if (!$_POST['url'] = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) :
      $erros[] = 'Url precisa ser válida';
    endif;

    if (!empty($erros)) :
      foreach ($erros as $key => $erro) {
        print "<li> $erro </li>";
      } else :
      print "Parabéns seus dados estão corretos";
    endif;
  endif;
  ?>

  <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST">
    Nome: <input type="text" name="nome"> <br />
    Idade: <input type="text" name="idade"> <br />
    Email: <input type="text" name="email"> <br />
    Peso: <input type="text" name="peso"> <br />
    URL: <input type="text" name="url"> <br />
    <button name="enviar-formulario" type="submit">Enviar</button>
  </form>
</body>

</html>
