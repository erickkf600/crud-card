
<?php
session_start();
  $mes        =  $_POST['mes'];
  $ano        =  date("Y");
  $valor      =  $_POST['valor'];
  $parcela    =  $_POST['parcela'];
  $cartao     =  $_POST['cartao'];
  $usuario    =  $_POST['usuario'];
  $nomeCompra =  $_POST['nomeCompra'];
  $quemCad =  $_POST['quemCad'];
  $link = 'http://localhost/Controle%20de%20Cart%C3%A3o/adicionar-compra';

  if (empty($parcela)) {
    $parcela = '---';
  }

  $inserirComp = $conectar->prepare("insert into compra(
      nomeComp, 
      usuario, 
      valor,
      parcela,
      cartao,
      mes,
      ano,
      quemCadastrou)
    values(
      :nomeCompra, 
      :usuario, 
      :valor,
      :parcela,
      :cartao,
      :mes,
      :ano,
      :quemCad)");
  $inserirComp -> bindParam(':nomeCompra', $nomeCompra, PDO::PARAM_STR);
  $inserirComp -> bindParam(':usuario', $usuario, PDO::PARAM_STR);
  $inserirComp -> bindParam(':valor', $valor, PDO::PARAM_STR);
  $inserirComp -> bindParam(':parcela', $parcela, PDO::PARAM_STR);
  $inserirComp -> bindParam(':cartao', $cartao, PDO::PARAM_STR);
  $inserirComp -> bindParam(':mes', $mes, PDO::PARAM_STR);
  $inserirComp -> bindParam(':ano', $ano, PDO::PARAM_STR);
  $inserirComp -> bindParam(':quemCad', $quemCad, PDO::PARAM_STR);
  $inserirComp->execute();

  if ($insert = $inserirComp -> rowCount() > 0) {
    $_SESSION['sucesso'] = "Compra Cadastrada";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
    }else{
    $_SESSION['falha_cad'] = "Ocorreu um erro.";
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
   }
?>   