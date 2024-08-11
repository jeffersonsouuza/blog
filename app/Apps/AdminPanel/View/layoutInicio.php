<?php
include __PUBLIC_FOLDER__ . '/view/inicioHTML.php';
?>

<div class="bg-body-tertiary py-2 p-lg-1 p-xl-2 overflow-x-hidden corpo-documento">

    <div class="row m-0 p-0">
        <aside class="col-lg-2">
            <?php require __ADMIN_FOLDER__ . '/View/sidebar.php'; ?>
        </aside>

        <main class="col-lg-10">
            <header class="mb-3">
                <?php require __ADMIN_FOLDER__ . '/View/navbar.php'; ?>
            </header>

            <!--    exibir mensagem de erro ou sucesso-->
            <?php if (isset($_SESSION['mensagem'])): ?>
                <div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?> p-3">
                    <?= $_SESSION['mensagem'] ?>
                </div>
            <?php
                unset($_SESSION['mensagem'], $_SESSION['tipo_mensagem']);
                endif;
            ?>
