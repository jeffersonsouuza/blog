<?php
    require_once 'app/Core/languageHandler.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?> - BrasaTour</title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?=__SYSTEM_ROOT_URL__?>/public/imagens/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=__SYSTEM_ROOT_URL__?>/public/imagens/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=__SYSTEM_ROOT_URL__?>/public/imagens/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=__SYSTEM_ROOT_URL__?>/public/imagens/favicon/site.webmanifest">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<style><?php require("public/css/style.css");?></style>

<body class="vh-100" id="toggleTheme">
    <?php require  __PUBLIC_FOLDER__ . '/view/shared/loader.php' ?>
