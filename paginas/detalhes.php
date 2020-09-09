<?php
$url = $_GET['pagina'];
$explode = explode('/', $url);
$ano = $explode[1];
$mes = $explode[2];
$nomeUser = $explode[3];
$buscarComp = $conectar->prepare("SELECT * from compra where usuario = ? and mes = ? and ano LIKE '%$ano%'");
$buscarComp->bindParam(1, $nomeUser, PDO::PARAM_STR);
$buscarComp->bindParam(2, $mes, PDO::PARAM_STR);
$buscarComp->execute();

?>
<div class="page-wrapper chiller-theme toggled">
    <header id="header"><?php require_once "includes/header.php" ?></header>
    <main class="page-content">
        <div class="headDeta">
            <h1 class="page-header">
                <small>Todas as Compras de <?php echo $nomeUser ?></small>
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
                                    <th style="width: 10%">Cartão</th>
                                    <th style="width: 3%">Parcela</th>
                                    <th style="width: 5%" class="text-center">Ação</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <?php
                                while ($compra = $buscarComp->fetch(PDO::FETCH_OBJ)) {
                                    $id = $compra->id;
                                    $nomeComp = $compra->nomeComp;
                                    $valor = $compra->valor;
                                    $parcela = $compra->parcela;
                                    $cartao = $compra->cartao;
                                    require "includes/modal-excluir.php";
                                    ?>
                                <tr>
                                    <form method="post" action="" id="editAjax<?=$id?>">
                                        <input type="hidden" name="id" value="<?=$id ?>" required>
                                        <input type="hidden" name="usuario" value="<?php echo $nomeUser ?>" required>
                                        <input type="hidden" name="quemCad" value="<?php echo $nome ?>" required>
                                        <input type="hidden" name="mes" value="<?php echo $mes ?>" required>
                                        <td data-th="Nome:">
                                            <?= $nomeComp ?>
                                            <input type="text" name="nomeCompra" class="form-control inputEdit"
                                                id="nomeComp<?=$id?>" value="<?=$nomeComp?>">
                                        </td>
                                        <td id="data-th" data-th="Valor:">
                                            R$ <?= $valor ?>
                                            <input type="text" name="valor" class="form-control inputEdit valorR"
                                                id="valor<?=$id?>" value="<?=$valor?>">
                                        </td>
                                        <td id="data-th" data-th="Cartão:">
                                            <?= $cartao ?>
                                            <select name="cartao" class="form-control inputEdit" id="cartao<?=$id?>">
                                                <option selected value="<?=$cartao?>"><?=$cartao?></option>
                                                <option value="nubank">Nubank</option>
                                                <option value="pag">PAG</option>
                                                <option value="digio">Digio</option>
                                                <option value="credcard">CredCard</option>
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
                                    <td id="total-table"><b>TOTAL<b></td>
                                    <td id="total-table"></td>
                                    <td id="total-table"></td>
                                    <td id="total-table"></td>
                                    <?php
                                    $somar = $conectar->query("SELECT SUM(valor) FROM compra WHERE usuario = '$nomeUser' and mes = '$mes' and ano LIKE '%$ano%'");
                                    $total = $somar->fetchColumn();
                                    $valor = number_format($total, 2, ',', '.');
                                    ?>
                                    <td data-th="Total" class="text-center" id="total"><b>R$ <?= $valor ?><b></td>
                                </tr>
                                
                                <tr class="formAdd">
                                    <form action="" method="post" id="cadAjax">
                                        <div id="add">
                                            <td>
                                                <input type="hidden" name="usuario" value="<?php echo $nomeUser ?>"
                                                    required>
                                                <input type="hidden" name="quemCad" value="<?php echo $nome ?>"
                                                    required>
                                                <input type="hidden" name="mes" value="<?php echo $mes ?>" required>
                                                <input type="text" name="nomeCompra" class="form-control" required
                                                    placeholder="Nome da Compra">
                                            </td>
                                            <td><input type="text" class="form-control valorR" name="valor" required
                                                    onkeypress="return event.charCode >= 48 && event.charCode <= 57"
                                                    placeholder="Valor">
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <select name="cartao" class="form-control" required>
                                                        <option selected disabled value="">Selecione</option>
                                                        <option value="nubank">Nubank</option>
                                                        <option value="pag">PAG</option>
                                                        <option value="digio">Digio</option>
                                                        <option value="credcard">CredCard</option>
                                                    </select>
                                                </div>
                                            </td>
                                            <td><input type="text" class="form-control" name="parcela"
                                                    placeholder="Parcela --/--"></td>
                                            <td class="text-center">
                                                <button type="submit" class="btn"><i
                                                        class="fas fa-check-square fa-lg mt-1"></i>
                                                </button>
                                    </form>   
                                                <button id="close" class="btn">
                                                    <i class="fas fa-window-close fa-lg mt-1"></i>
                                                </button>
                                            </td>
                                        </div>
                                    
                                </tr>
                            </tbody>
                        </table>
                        <button id="addCompra" class="btn btn-warning text-light">ADICIONAR COMPRA</button>
                    </div>
                </div>
            </div>
        </section>
        <?php require_once "assets/totais.php"; ?>
        <section class="container mb-5 mt-4">
            <div class="row totaisCard">
                <div class="col-md-3 col-6 mb-3">
                    <div class="card nub">
                        <h3>Total NUbank</h3>
                        <?=$Nubank?>
                        <div class="d-flex justify-content-around"> 
                            <i class="fas fa-check-square fa-lg mt-1" id="JaTemDtlsNu"></i>
                        </div>
                        <div class="pgDtls" id="PgNu">
                            <button class="btn text-light closePag" id="closeNu"><i class="fas fa-times"></i></button>
                            <h4>PAGO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card pag">
                        <h3>Total PAG</h3>
                        <?=$Pag?>
                        <div class="d-flex justify-content-around"> 
                            <i class="fas fa-check-square fa-lg mt-1" id="JaTemDtlsPa"></i>
                        </div>
                        <div class="pgDtls" id="PgPa">
                            <button class="btn text-light closePag" id="closePa"><i class="fas fa-times"></i></button>
                            <h4>PAGO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card cred">
                        <h3>Total CredCard</h3>
                        <?=$Credcard?>
                        <div class="d-flex justify-content-around">
                            <i class="fas fa-check-square fa-lg mt-1" id="JaTemDtlsCr"></i>
                        </div>
                        <div class="pgDtls" id="PgCr">
                            <button class="btn text-light closePag" id="closeCr"><i class="fas fa-times"></i></button>
                            <h4>PAGO</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 mb-3">
                    <div class="card dig">
                        <h3>Total Digio</h3>
                        <?=$Digio?>
                        <div class="d-flex justify-content-around">
                            <i class="fas fa-check-square fa-lg mt-1" id="JaTemDtlsDi"></i>
                        </div>
                        <div class="pgDtls" id="PgDi">
                            <button class="btn text-light closePag" id="closeDi"><i class="fas fa-times"></i></button>
                            <h4>PAGO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>


