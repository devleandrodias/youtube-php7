<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upload de Arquivos</title>
</head>

<body>

  <?php
  if (isset($_POST['enviar-formulario'])) :
    $formatosPermitidos = array("png", "jpeg", "jpg", "gif");
    $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

    if (!in_array($extensao, $formatosPermitidos)) :
      print "Formato ${extensao} inserido é inválido";
    else :
      $pasta = "arquivos/";
      $temporario = $_FILES['arquivo']['tmp_name'];
      $novoNome = uniqid() . ".$extensao";

      if (!move_uploaded_file($temporario, $pasta . $novoNome)) :
        print "Upload não realizado com sucesso...";
      else :
        print "Upload realizado com sucesso!";
      endif;
    endif;
  endif;
  ?>
  <form action="<?php print $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo"> <br>
    <button type="submit" name="enviar-formulario">Enviar Arquivo</button>
  </form>
</body>

</html>
