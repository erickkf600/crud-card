<?php
    $nome = $_POST['nome'];
    $mes = $_POST['mes'];
    $update=$conectar->prepare("UPDATE `compra` SET `pago`= 'nao', dt_pagamento = '' WHERE usuario = :nome and mes = :mes");
    $update -> bindParam(':nome', $nome, PDO::PARAM_STR);
    $update -> bindParam(':mes', $mes, PDO::PARAM_STR); 
    $update->execute();

?>