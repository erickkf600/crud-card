
<?php
  $mes        =  $_POST['mes'];
  $ano        =  date("Y-m-d");
  $valor      =  $_POST['valor'];
  $cartao     =  $_POST['cartao'];

  $inserirDin = $conectar->prepare("insert into jatem (valor, mes, cartao, ano) values (:valor, :mes, :cartao, :ano)");
  $inserirDin -> bindParam(':valor', $valor, PDO::PARAM_STR);
  $inserirDin -> bindParam(':mes', $mes, PDO::PARAM_STR);
  $inserirDin -> bindParam(':cartao', $cartao, PDO::PARAM_STR);
  $inserirDin -> bindParam(':ano', $ano, PDO::PARAM_STR);
  $inserirDin->execute();
?>   