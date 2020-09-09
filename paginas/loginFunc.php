<?php 
    $post = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    $usuario = $post['usuario'];
    $senha = $post['senha'];
    $link = 'home';

    $buscar_user = $conectar->prepare("SELECT * from usuarios where usuario = ? and senha  = ? limit 1");
    $buscar_user -> bindParam(1, $usuario, PDO::PARAM_STR);
    $buscar_user -> bindParam(2, $senha, PDO::PARAM_STR);
    $buscar_user->execute();
    $cadastros = $buscar_user -> rowCount();
    if ($cadastros == 0) {
 	    echo"<script>
         alert('Usuário NÃO Cadastrado');window.location.href='login';
        </script>";
    }else{
         setcookie('usuario', $usuario, time() + 365 * 365 * 240); 
         $update=$conectar->prepare("update usuarios set status = '1' where usuario = :usuario");
         $update -> bindValue(':usuario', $usuario, PDO::PARAM_STR);
         $update->execute();
 	     echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>"; 
    }

?>