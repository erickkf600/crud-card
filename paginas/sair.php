<?php
    $user = $_POST['usuario'];
    $update=$conectar->prepare("UPDATE `usuarios` SET `status`= '0', hora = now() WHERE usuario = ?");
    $update -> bindParam(1, $user, PDO::PARAM_STR);
    $update->execute();
    setcookie('usuario', $user, time()-3600);
    unset($_COOKIE);
?>