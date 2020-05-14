<?php
require_once '../connection/db_connect.php';
session_start();

if (isset($_POST['btn-deletar'])) :
  $id = mysqli_escape_string($connect, $_POST['id']);

  $sql = "DELETE FROM clientes WHERE (`id` = '$id');";

  if (mysqli_query($connect, $sql)) :
    $_SESSION['mensagem'] = 'Cliente removido com sucesso!';
    header('Location: ../index.php');
  else :
    $_SESSION['mensagem'] = 'Erro ao tentar remover cliente.';
    header('Location: ../index.php');
  endif;
endif;
