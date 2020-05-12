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
   */

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

    if (!$_POST['ip'] = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) :
      $erros[] = 'Ip precisa ser válido';
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
    Idade: <input type="text" name="idade"> <br />
    Email: <input type="email" name="email"> <br />
    Peso: <input type="text" name="peso"> <br />
    IP: <input type="text" name="ip"> <br />
    URL: <input type="text" name="url"> <br />
    <button name="enviar-formulario" type="submit">Enviar</button>
  </form>
</body>

</html>
