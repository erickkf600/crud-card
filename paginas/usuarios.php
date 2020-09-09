<?php  
    $buscar_user = $conectar->prepare("select * from usuarios");
    $buscar_user->execute();
?>
<div class="page-wrapper chiller-theme toggled">
    <header id="header"><?php require_once "includes/header.php" ?></header>
    <main class="page-content">
        <h1 class="page-header">
            <small>Lista de Usuários</small>
        </h1>
        <section class="container mt-3">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 2%">ID</th>
                                    <th style="width: 25%">Nome</th>
                                    <th style="width: 25%">Status</th>
                                    <th style="width: 10%">Excluir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php   
                            while ($usuario=$buscar_user->fetch(PDO::FETCH_OBJ)){  
                            $id = $usuario->id;
                            $nome = $usuario->nome;
                            $status = $usuario->status;
                            $hora = $usuario->hora;
                            $hora = date("H:i - d/m", strtotime($hora));
                        ?>
                                <tr>
                                    <td><?php echo$id?></td>
                                    <td><?php echo$nome?></td>
                                    <?php if ($status == 0) {
                                    echo "<td><span class='badge badge-danger'>Visto por ultimo $hora</span></td>"; 
                                    }else{
                                    echo "<td><span class='badge badge-success'>Online</span></td>";
                                    }?>
                                    <td class="text-center"><a href="#"></a><i class="fas fa-trash-alt"></i></td>
                                </tr>
                                    <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </main>
</div>