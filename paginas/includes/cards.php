<?php
$buscar_dev = $conectar->prepare("select * from compra GROUP BY usuario ORDER BY id ASC");
$buscar_dev->execute();
?>
<section class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">
                <small>Sistema para contorle de cartões</small>
            </h1>
            <div class="breadcrumb mt-3">
                <div>
                    <form action="" method="post" name="mes">
                        <select class="form-control" name="select-mes" onchange="this.form.submit();">
                            <?php
                            $mes = $_POST['select-mes'];
                            if (isset($mes)) {
                                echo "<option disabled selected value=''>$mes</option>";
                            } else {
                                echo "<option disabled selected value=''>Mês</option>";
                            }

                            ?>
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
                    </form>
                </div>
                <b><?php echo $ano ?></b>
            </div>
        </div>
    </div>
    <div class="row">
        <?php
        while ($devedor = $buscar_dev->fetch(PDO::FETCH_OBJ)) {
            $id = $devedor->id;
            $nome = $devedor->usuario;
            $pago = $devedor->pago;
            $display = 'd-none';
            $somar = $conectar->query("SELECT SUM(valor) FROM compra WHERE usuario = '$nome' and mes = '$mes' and ano LIKE '%$ano%'");
            $resultado = $somar->fetchColumn();
            $valor = number_format($resultado, 2, ',', '.');
            if (isset($resultado)) {
                echo "<style>#mesVazio{display: none}</style>"

                ?>
        <div class="col-lg-4 col-sm-6 mt-4">
            <div class="card" id="cards">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $nome ?></h5>

                    <p class="card-text">Saldo Total: R$ <?php echo $valor ?></p>
                    <span class="d-flex">
                        <a href="detalhes/<?php echo $ano ?>/<?php echo $mes ?>/<?php echo $nome ?>"
                            class="btn btn-primary mr-2 det">Ver detalhes</a>
                        <a href="#<?php echo $nome ?>" id="pagoBtn" class="btn btn-danger" data-role="pagoBtn"
                            data-name="<?php echo $nome ?>" data-mes="<?php echo $mes ?>">PAGO</a>
                    </span>
                </div>
                <?php
                        $pagoBusca = $conectar->prepare("SELECT mes, dt_pagamento FROM compra WHERE pago = 'sim' and usuario = '$nome' and  mes='$mes'");
                        $pagoBusca->execute();
                        $itemMes = '';
                        $dt_pagamento = '';
                        while ($resbu = $pagoBusca->fetch(PDO::FETCH_OBJ)) {
                            $itemMes  = $resbu->mes;
                            $dt_pagamento  = $resbu->dt_pagamento;
                        }
                        if ($mes == $itemMes) {
                            $display = 'd-flex';
                            $data = date('d/m/y', strtotime($dt_pagamento));
                            ?>
                <div class="pago <?=$display ?>">
                    <button class="btn text-light fecharPag" data-role="fecharPag" data-name="<?=$nome ?>"
                        data-mes="<?=$mes ?>"><i class="fas fa-times"></i></button>
                    <h2>PAGO - <?=$data?></h2>
                </div>
                <?php } ?>
            </div>
        </div>

        <?php }}
             
            if (empty($resultado)) {
                echo "
                <h1 class='page-header mt-5 h2' id='mesVazio'>
                    <small>Não há nada para este mês</small>
                </h1>";
            }  
             if (empty($mes)) {
                echo "
                <style>#mesVazio{display: none}</style>
                <h1 class='page-header mt-5 h2' id='semMes'>
                    <small>Selecione o mes</small>
                </h1>";
            }  
        ?>
</section>