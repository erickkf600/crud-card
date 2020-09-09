<?php
    //NUBANK
    $totalNu = $conectar->query("SELECT SUM(valor) FROM compra WHERE mes = '$mes' and ano LIKE '%$ano%' AND cartao = 'nubank'")->fetchColumn();
        if ($totalNu) {
            $valorNu = number_format($totalNu, 2, ',', '.');
            $Nubank =  "<p>R$ $valorNu</p>";
            
        }else {
            $Nubank =  "<p>---</p>";
        }
    //PAG
    $totalPAG = $conectar->query("SELECT SUM(valor) FROM compra WHERE mes = '$mes' and ano LIKE '%$ano%' AND cartao = 'pag'")->fetchColumn();
        if ($totalPAG) {
            $valorPag = number_format($totalPAG, 2, ',', '.');
            $Pag =  "<p>R$ $valorPag</p>";
        }else {
            $Pag =  "<p>---</p>";
        }
    //CREDCARD
    $totalCred = $conectar->query("SELECT SUM(valor) FROM compra WHERE mes = '$mes' and ano LIKE '%$ano%' AND cartao = 'credcard'")->fetchColumn();
        if ($totalCred) {
            $valorCred = number_format($totalCred, 2, ',', '.');
            $Credcard =  "<p>R$ $valorCred</p>";
        }else {
            $Credcard =  "<p>---</p>";
        }
    //DIGIO 
    $totalDig = $conectar->query("SELECT SUM(valor) FROM compra WHERE mes = '$mes' and ano LIKE '%$ano%' AND cartao = 'digio'")->fetchColumn();
        if ($totalDig) {
            $valorDig = number_format($totalDig, 2, ',', '.');
            $Digio =  "<p>R$ $valorDig</p>";
        }else {
            $Digio =  "<p>---</p>";
        }
       

?>