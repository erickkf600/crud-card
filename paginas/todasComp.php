<?php
$url = $_GET['pagina'];
$explode = explode('/', $url);
$mes = $explode[1];
$card = $explode[2];
$TotCard = $conectar->prepare("SELECT * from compra where cartao = ? and mes = ? and ano LIKE '%$ano%'");
$TotCard->bindParam(1, $card, PDO::PARAM_STR);
$TotCard->bindParam(2, $mes, PDO::PARAM_STR);
$TotCard->execute();
$buscar_user = $conectar->prepare("select * from usuarios");
$buscar_user->execute();

?>
<div class="page-wrapper chiller-theme toggled">
    <header id="header"><?php require_once "includes/header.php" ?></header>
    <main class="page-content">
        <div class="headDeta">
            <h1 class="page-header">
                <small>Fatura do <span style="text-transform: capitalize"><?=$card ?></span></small>
            </h1>
        </div>
        <section class="container mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th style="width: 30%">Nome Compra</th>
                                    <th style="width: 8%">Valor</th>
                                    <th style="width: 10%">Usuario</th>
                                    <th style="width: 3%">Parcela</th>
                                    <th style="width: 5%" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <?php
                                while ($compra = $TotCard->fetch(PDO::FETCH_OBJ)) {
                                    $id = $compra->id;
                                    $nomeComp = $compra->nomeComp;
                                    $valor = $compra->valor;
                                    $usuario = $compra->usuario;
                                    $parcela = $compra->parcela;
                                    require "includes/modal-excluir.php";
                                ?>
                                <tr>
                                    <form method="post" action="" id="editAjax<?=$id?>">
                                        <input type="hidden" name="id" value="<?=$id ?>" required>
                                        <input type="hidden" name="usuario" value="<?php echo $nome ?>" required>
                                        <input type="hidden" name="quemCad" value="<?php echo $nome ?>" required>
                                        <input type="hidden" name="mes" value="<?php echo $mes ?>" required>
                                        <input type="hidden" name="cartao" value="<?php echo $card ?>" required>
                                        <td data-th="Nome:">
                                            <?= $nomeComp ?>
                                            <input type="text" name="nomeCompra" class="form-control inputEdit"
                                                id="nomeComp<?=$id?>" value="<?=$nomeComp?>">
                                        </td>
                                        <td id="data-th" data-th="Valor:">
                                            R$ <?= $valor ?>
                                            <input type="number" name="valor" class="form-control inputEdit valorR"
                                                id="valor<?=$id?>" value="<?=$valor?>">
                                        </td>
                                        <td id="data-th" data-th="Usuario:">
                                            <?= $usuario ?>
                                            <select name="usuario" class="form-control inputEdit" id="usuario<?=$id?>">
                                                <option selected value="<?=$usuario?>"><?=$usuario?></option>
                                                <?php
                                                    while ($usuario = $buscar_user->fetch(PDO::FETCH_OBJ)) {
                                                    $nome = $usuario->nome;
                                                ?>
                                                <option value="<?php echo $nome ?>"><?php echo $nome ?></option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td id="data-th" data-th="Parcela:">
                                            <?= $parcela ?>
                                            <input type="text" name="parcela" class="form-control inputEdit"
                                                id="parcela<?=$id?>" value="<?=$parcela?>">
                                        </td>
                                        <td class="text-center botoes">
                                            <!-- BOTES DO FORM DE UPDATE -->
                                            <button class="btn updBtn" id="SendEdit<?=$id?>" type="submit">
                                                <i class="fas fa-check-square text-dark fa-lg"></i>
                                            </button>
                                    </form>
                                    <button class="btn updBtn" id="Cancel<?=$id?>">
                                        <i class="fas fa-window-close text-dark fa-lg"></i>
                                    </button>
                                    <!--  -->
                                    <button class="btn" data-role="Edit" data-id="<?=$id ?>" id="<?=$id ?>">
                                        <i class="fas fa-pen-square text-dark fa-lg"></i>
                                    </button>
                                    <button class="btn del" data-toggle="modal" data-target="#modalRem<?=$id?>"
                                        id="del<?=$id ?>"><i class="fas fa-trash-alt text-dark fa-lg"></i>
                                    </button>
                                    </td>
                                </tr>
                                <?php } ?>
                                <tr class="bg-dark text-light">
                                    <td id="total-table" colspan="4"><b>SUBTOTAL<b></td>
                                    <?php
                                    $somar = $conectar->query("SELECT SUM(valor) FROM compra WHERE cartao = '$card' and mes = '$mes' and ano LIKE '%$ano%'");
                                    $total = $somar->fetchColumn();
                                    $valor = number_format($total, 2, ',', '.');
                                    ?>
                                    <td data-th="Total" class="text-center" id="data-th"><b>R$ <?= $valor ?><b></td>
                                </tr>
                                
                    <tr class="bg-success text-light">
                        <td id="total-table" colspan="4"><b>JÁ TEM<b></td>
                        <td data-th="Já Tem" class="jaTem" id="data-th">
                        <?php
                            $somar = $conectar->query("SELECT SUM(valor) FROM jatem WHERE cartao = '$card' and mes = '$mes' and ano LIKE '%$ano%'");
                            $totJatem = $somar->fetchColumn();
                            $jatem = number_format($totJatem, 2, ',', '.');
                            if (isset($totJatem)) {
                        ?>
                            <form class="m-0" method="post" action="" id="UpJaTem">
                                <div class="input-group">
                                    <p>R$</p>
                                    <input type="hidden" name="mes" value="<?=$mes ?>" required>
                                    <input type="hidden" name="cartao" value="<?=$card ?>" required>
                                    <input type="text" class="valorR JaTem" value="<?=$jatem?>" name="valor" required>
                                    <button class="btn" type="submit">
                                        <i class="fas fa-pen-square text-dark fa-lg"></i>
                                    </button>
                                </div>
                            </form>
                       <?php }else{ ?>  
                            <form class="m-0" method="post" action="" id="JaTem">
                                <div class="input-group">
                                    <p>Ola</p>
                                    <input type="text" class="valorR JaTem" name="valor" placeholder="0.00" required>
                                    <input type="hidden" name="mes" value="<?=$mes ?>" required>
                                    <input type="hidden" name="cartao" value="<?=$card ?>" required>
                                    <button class="btn" type="submit">
                                        <i class="fas fa-pen-square text-dark fa-lg"></i>
                                    </button>
                                </div>
                            </form> 
                       <?php }?> 
                        </td>
                    </tr>
                    <tr class="bg-danger text-light">
                        <?php
                            $resta = $total - $totJatem;
                            $resta = number_format($resta, 2, ',', '.');
                            ?>
                        <td id="total-table" colspan="4"><b>RESTA<b></td>
                        <td data-th="Resta" class="text-center" id="data-th"><b>R$ <?= $resta ?><b></td>
                    </tr>
                    </tbody>
                    </table>
                </div>
            </div>
</div>
</section>
</main>
</div>