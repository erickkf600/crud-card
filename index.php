<?php
session_start();
require "banco.php";
$conectar = conexao();
require "pag-control.php";
$ano = date('Y');
$totalAll = $conectar->prepare("select valor, mes from compra");
$totalAll->execute();
$dados = $totalAll->fetch(PDO::FETCH_OBJ);
$valor = $dados->valor;


if (isset($_POST['select-mes'])) {
   $mes = $_POST['select-mes'];
}else{
  $mes = '';
}

?>
<!doctype html xmlns="http://www.w3.org/1999/xhtml">
<html lang="pt-br">

<head>
  <meta name="author" content="Erick Ferreira" />
  <meta http-equiv="Content-Type" content="text/html" ; charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="http://localhost/Controle%20de%20Cart%C3%A3o/assets/css/bootstrap.css">
  <link rel="stylesheet" href="http://localhost/Controle%20de%20Cart%C3%A3o/assets/css/fontawesome.css">
  <link rel="stylesheet" href="http://localhost/Controle%20de%20Cart%C3%A3o/assets/css/core.css">
  <title>CONTORLE DE CARTÕES</title>
</head>

<body>
  <?php require load(); ?>

  <script src="http://localhost/Controle%20de%20Cart%C3%A3o/assets/js/jquery.js"></script>
  <script src="http://localhost/Controle%20de%20Cart%C3%A3o/assets/js/cookies.js"></script>
  <script src="http://localhost/Controle%20de%20Cart%C3%A3o/assets/js/jquery-mask.js"></script>
  <script src="http://localhost/Controle%20de%20Cart%C3%A3o/assets/js/script.js"></script>
</body>

</html>