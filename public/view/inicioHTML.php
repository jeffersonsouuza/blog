<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?> - BrasaTour</title>

    <link rel="apple-touch-icon" sizes="180x180" href="../../public/imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../public/imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../public/imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../public/imagens/favicon/site.webmanifest">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style><?php require("public/css/style.css");?></style>

<body class="bg-body-tertiary py-2 p-lg-1 p-xl-2 overflow-x-hidden corpo-documento">

    <div class="row m-0 p-0">
        <aside class="col-lg-2">
            <?php require 'public/view/sidebar.php'; ?>
        </aside>

        <main class="col-lg-10">
            <header class="mb-3">
                <?php require 'public/view/navbar.php'; ?>
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

