<?php 
if(empty($_COOKIE['usuario'])){
    $link = 'login';
    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$link'>";
 }else{
    $usuario = $_COOKIE['usuario'];
		$buscar = $conectar->prepare("SELECT * from usuarios where usuario = ? limit 1");
		$buscar -> bindParam(1, $usuario, PDO::PARAM_STR);
		$buscar->execute();
		$user = $buscar->fetch(PDO::FETCH_OBJ);
        $nome = $user->nome;
}
?>
  <nav class="header">
      <ul>
          <li>
              <button class="minimizar">
                  <i class="fas fa-bars"></i>
              </button>
          </li>
          <li>
            <button class="reload btn mr-3 btn-dark">
                  <i class="fas fa-sync-alt"></i>
            </button>
            <?php echo $nome ?>
          </li>
      </ul>
  </nav>

  <nav id="sidebar" class="sidebar-wrapper">
      <div class="sidebar-content">
          <div class="sidebar-menu">
              <ul>
                  <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/">
                          <i class="fas fa-home"></i><span>HOME</span></a>
                  </li>
                  <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/adicionar-compra">
                          <i class="far fa-credit-card"></i><span>Adicionar Compra</span></a>
                  </li>
                  <?php if ($usuario == 'erickkf600') {
                      echo "
                      <li>
                        <a href='http://localhost/Controle%20de%20Cart%c3%a3o/usuarios'>
                          <i class='fa fa-users'></i><span>Usuários</span>
                        </a>
                      </li>";
                  }?>

                  <li>
                      <a href="http://localhost/Controle%20de%20Cart%c3%a3o/adicionar-usuario" data-toggle="modal"
                          data-target="#adduser">
                          <i class="fa fa-user"></i><span>Adicionar Usuário</span></a>
                  </li>
                  <li>
                      <a data-role="sair" data-user="<?=$usuario ?>" class="text-light" href="">
                          <i class="fa fa-sign-out-alt"></i><span>Sair</span>
                      </a>
                  </li>
                  <div class="cartoes">
                      <?php require_once "assets/total.php"; ?>
                      <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/todasComp/<?=$mes?>/nubank" id="totLink">
                              <div class='card nub tot'><?=$Nubank?></div>
                          </a></li>
                      <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/todasComp/<?=$mes?>/pag" id="totLink">
                              <div class='card pag tot'><?=$Pag?></div>
                          </a></li>
                      <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/todasComp/<?=$mes?>/credcard" id="totLink">
                              <div class='card cred tot'><?=$Credcard?></div>
                          </a></li>
                      <li><a href="http://localhost/Controle%20de%20Cart%c3%a3o/todasComp/<?=$mes?>/digio" id="totLink">
                              <div class='card dig tot'><?=$Digio?></div>
                          </a></li>
                  </div>
              </ul>
          </div>
  </nav>

  <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header bg-success text-light">
                  <h5 class="modal-title" id="exampleModalLabel">Adicionar Usuário</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="cadUser" method="post">
                      <div class="form-group">
                          <input type="text" class="form-control" placeholder="Nome" id="nome" name="usnome" required>
                      </div>
                      <button type="submit" class="btn btn-success">Cadastar</button>
                  </form>
              </div>
          </div>
      </div>
  </div>