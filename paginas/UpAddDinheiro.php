
<?php
  $mes        =  $_POST['mes'];
  $ano        =  date("Y-m-d");
  $valor      =  $_POST['valor'];
  $cartao      =  $_POST['cartao'];

  $inserirDin = $conectar->prepare("UPDATE jatem SET valor = :valor, hora = now() WHERE mes = :mes AND cartao = :cartao");
  $inserirDin -> bindParam(':valor', $valor, PDO::PARAM_STR);
  $inserirDin -> bindParam(':mes', $mes, PDO::PARAM_STR);
  $inserirDin -> bindParam(':cartao', $cartao, PDO::PARAM_STR);
  $inserirDin->execute();
?>   