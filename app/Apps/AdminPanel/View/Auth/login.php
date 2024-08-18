<?php
include __PUBLIC_FOLDER__ . '/view/startHTML.php';
?>

<div class="bg-body-tertiary overflow-x-hidden login">
    <div class="row w-100 vh-100 vw-100 d-flex m-0 p-0">
        <section class="col-md-6 col-lg-7 col-xl-8 m-0 p-0">
            <figure class="m-0 p-0 h-100">
                <img class="img-fluid object-fit-cover h-100 w-100 loginImage" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/login-jericoacoara.jpg" alt="Jericoacoara">
            </figure>
        </section>

        <section class="col-md-6 col-lg-5 col-xl-4 p-4 p-xl-5 d-flex justify-content-center flex-column">

            <section class="mb-3">
                <?php require __PUBLIC_FOLDER__ . '/view/component/message.php'; ?>
            </section>

            <figure class="mb-5 d-flex justify-content-center">
                <img class="img-fluid logo-login" src="<?=__SYSTEM_ROOT_URL__?>/public/imagens/logo-brasatour.png" width="2929" height="512" alt="Jericoacoara">
            </figure>

            <h2 class="lh-sm h5 fw-medium mb-4">Bem Vindo!</h2>

            <form action="<?=__SYSTEM_ADMIN_URL__?>/realizar-login" method="POST">
                <div class="form-group mb-4">
                    <label class="ms-1" for="email">Login</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="digite o email">
                </div>

                <div class="form-group mb-4">
                    <label class="ms-1" for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" class="form-control" placeholder="digite a senha">
                    <div class="pt-2 d-flex justify-content-end link-forget-password">
                        <a href="" class="text-decoration-none">esqueceu sua senha?</a>
                    </div>
                </div>
                <button class="btn btn-primary mb-4 w-100">Entrar</button>
            </form>
            <hr class="my-5">
            <footer class="d-flex justify-content-center align-items-end">
                <i class="bi-c-circle me-1"></i>
                <p>BrasaTour 2024</p>
            </footer>
        </section>
    </div>
</div>

<!--<section id="container" class="bg-light m-5 p-3">-->
<!---->
<!--    -->
<!---->
<!--        <div class="col-6 px-5 py-4">-->
<!--            <h1 class="form-text fs-3 pb-3">Cadastrar Usuário:</h1>-->
<!---->
<!--            <form action="--><?php //=__SYSTEM_ADMIN_URL__?><!--/salvar-usuario" method="POST">-->
<!--                <div class="form-group mb-4">-->
<!--                    <label for="registrar-email">E-mail</label>-->
<!--                    <input type="email" name="email" id="registrar-email" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group mb-4">-->
<!--                    <label for="registrar-senha">Senha</label>-->
<!--                    <input type="password" name="senha" id="registrar-senha" class="form-control">-->
<!--                </div>-->
<!--                <button class="btn btn-primary">Cadastrar</button>-->
<!--            </form>-->
<!--        </div>-->
<!---->
<!--    </div>-->
<!---->
<!--</section>-->

<?php
include __PUBLIC_FOLDER__ . '/view/endHTML.php';
?>

