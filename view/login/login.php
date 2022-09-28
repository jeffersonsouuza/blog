<?php
include __DIR__ . '/../html/inicioHTML.php';
?>

<section id="container" class="bg-light m-5 p-3">

    <h1 class="text-primary fs-1 px-4 pt-2">Conecte-se ao seu Blog:</h1>

    <div class="row">
        <div class="col-6 px-5 py-4 border border-primary border-top-0 border-bottom-0 border-start-0">
        <h1 class="form-text fs-3 pb-3">Acesse sua conta:</h1>

        <form action="/blog-php/index.php/realizar-login" method="POST">
            <div class="form-group mb-4">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha" class="form-control">
            </div>
            <button class="btn btn-primary">Entrar</button>
        </form>
        </div>

        <div class="col-6 px-5 py-4">
            <h1 class="form-text fs-3 pb-3">Cadastrar Usuário:</h1>

            <form action="/blog-php/index.php/salvar-usuario" method="POST">
                <div class="form-group mb-4">
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control">
                </div>
                <button class="btn btn-primary">Cadastrar</button>
            </form>
        </div>

    </div>

</section>

<?php
include __DIR__ . '/../html/finalHTML.php';
?>

