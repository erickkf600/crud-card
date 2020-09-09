
<?php
  $usnome =  $_POST['usnome'];
  $inserirUSER = $conectar->prepare("insert into usuarios(nome)values(:nome)");
  $inserirUSER -> bindParam(':nome', $usnome, PDO::PARAM_STR);
  $inserirUSER->execute();

  if ($insert = $inserirUSER -> rowCount() > 0) {
    echo"<script>
      alert('Usuário Cadastrado');window.location.href='home';
    </script>";
    }else{
    "<script>
      alert('Ocorreu um erro');window.location.href='home';
    </script>";
   }
?>   