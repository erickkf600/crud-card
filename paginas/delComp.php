<?php
    $id = $_POST['id'];

    $delete=$conectar->prepare("DELETE FROM `compra` WHERE id = ?");
    $delete -> bindParam(1, $id, PDO::PARAM_STR);
    $delete->execute();
?>