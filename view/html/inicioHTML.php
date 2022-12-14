<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title><?= $title ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class="bg-primary">

<header>
    <?php if (isset($_SESSION['logado'])): ?>
        <nav class="navbar navbar-expand-lg bg-light mx-5 my-3 p-3">
            <div class="container-fluid ms-5">
                <a class="navbar-brand fs-3 text-primary" href="/blog-php/index.php/listar-artigos">Meu Blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-left: 650px">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-5">
                        <li class="nav-item">
                            <a class="nav-link text-primary active" aria-current="page" href="/blog-php/index.php/listar-artigos">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" aria-current="page" href="/blog-php/index.php/painel-admin">Painel Admin</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" aria-current="page" href="/blog-php/index.php/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" aria-current="page" href="/blog-php/index.php/logout">Sair</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <?php endif; ?>
</header>

<!--    exibir mensagem de erro ou sucesso-->
<?php if (isset($_SESSION['mensagem'])): ?>
    <div class="alert alert-<?= $_SESSION['tipo_mensagem'] ?> mx-5 mt-3 p-3">
        <?= $_SESSION['mensagem'] ?>
    </div>
    <?php
    unset($_SESSION['mensagem'], $_SESSION['tipo_mensagem']);
endif;
?>
