
<?php
  $mes        =  $_POST['mes'];
  $ano        =  date("Y-m-d");
  $valor      =  $_POST['valor'];
  $parcela    =  $_POST['parcela'];
  $cartao     =  $_POST['cartao'];
  $usuario    =  $_POST['usuario'];
  $nomeCompra =  $_POST['nomeCompra'];
  $quemCad    =  $_POST['quemCad'];
  $id         =  $_POST['id'];
  if (empty($parcela)) {
    $parcela = '---';
  }
  $updateComp = $conectar->prepare("UPDATE compra SET
    nomeComp      = :nomeCompra,
    usuario       = :usuario,
    valor         = :valor,
    parcela       = :parcela,
    cartao        = :cartao,
    mes           = :mes,
    ano           = :ano,
    quemCadastrou = :quemCad
    WHERE id = :id");
  $updateComp -> bindParam(':nomeCompra', $nomeCompra, PDO::PARAM_STR);
  $updateComp -> bindParam(':usuario', $usuario, PDO::PARAM_STR);
  $updateComp -> bindParam(':valor', $valor, PDO::PARAM_STR);
  $updateComp -> bindParam(':parcela', $parcela, PDO::PARAM_STR);
  $updateComp -> bindParam(':cartao', $cartao, PDO::PARAM_STR);
  $updateComp -> bindParam(':mes', $mes, PDO::PARAM_STR);
  $updateComp -> bindParam(':ano', $ano, PDO::PARAM_STR);
  $updateComp -> bindParam(':quemCad', $quemCad, PDO::PARAM_STR);
  $updateComp -> bindParam(':id', $id, PDO::PARAM_STR);
  $updateComp->execute();

  if ($insert = $updateComp -> rowCount() > 0) {
    echo "sucesso";
    }else{
    echo "falha";
   }


   
?>   