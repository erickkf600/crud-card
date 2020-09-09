<?php
$buscar_user = $conectar->prepare("select * from usuarios");
$buscar_user->execute();
?>
<div class="page-wrapper chiller-theme toggled">
    <header id="header"><?php require_once "includes/header.php" ?></header>

    <main class="page-content">
        <h1 class="page-header">
            <small>Adicionar Compra</small>
        </h1>

        <div class="container col-lg-10 mt-5" style='box-shadow: 0 1px 1px rgba(0,0,0,.05); background: #fff'>
            <form action="" method="post" id="cadAjax">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <input type="hidden" name="quemCad" value="<?php echo $nome ?>" required>
                            <input type="text" class="form-control" placeholder="Nome da Compra" name="nomeCompra" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <select name="usuario" class="form-control" required>
                                <option selected disabled value="">Usuário</option>
                                <?php
                                while ($usuario = $buscar_user->fetch(PDO::FETCH_OBJ)) {
                                    $nome = $usuario->nome;
                                    ?>
                                    <option value="<?php echo $nome ?>"><?php echo $nome ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="cartao" class="form-control" required>
                                <option selected disabled value="">Cartão</option>
                                <option value="nubank">Nubank</option>
                                <option value="pag">PAG</option>
                                <option value="digio">Digio</option>
                                <option value="credcard">CredCard</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <select name="mes" class="form-control" required>
                                <option selected disabled value="">Mês</option>
                                </option>
                                <option value="janeiro">Janeiro</option>
                                <option value="fevereiro">Fevereiro</option>
                                <option value="marco">Março</option>
                                <option value="abril">Abril</option>
                                <option value="maio">Maio</option>
                                <option value="junho">Junho</option>
                                <option value="julho">Julho</option>
                                <option value="agosto">Agosto</option>
                                <option value="setembro">Setembro</option>
                                <option value="outubro">Outubro</option>
                                <option value="novembro">Novembro</option>
                                <option value="dezembro">Dezembro</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control valorR" placeholder="Valor 200.00" name="valor" required onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Parcelas  1/10" name="parcela">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-success">CADASTRAR</button>
            </form>
            <?php
            if (!empty($_SESSION['sucesso'])) {
                echo "<p style='color: #01ad01; font-size: 20px; font-weight: 600'>" . $_SESSION['sucesso'] . "</p>";
                unset($_SESSION['sucesso']);
            } else {
                if (!empty($_SESSION['falha_cad'])) {
                    echo "<p style='color: #f00>" . $_SESSION['falha_cad'] . "</p>";
                    unset($_SESSION['falha_cad']);
                }
            }
            ?>
        </div>
    </main>
</div>