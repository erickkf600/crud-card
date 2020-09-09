<main class="mt-5 pl-2 pr-2">
    <h1 class="page-header text-center">
        <small>Login do Sistema</small>
    </h1>

    <div class="container p-4 mt-5 col-lg-5 text-center" style='box-shadow: 0 1px 1px rgba(0,0,0,.05); background: #fff'>
        <form action="loginFunc" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Usuário" name="usuario" required>
            </div>
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Senha" name="senha" required>
            </div>

            <button type="submit" class="btn btn-primary">ENTRAR</button>
        </form>
    </div>
</main>