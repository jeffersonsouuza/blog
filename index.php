<?php

require __DIR__ . '/vendor/autoload.php';
require_once 'boot.php';

$caminho = $_SERVER['PATH_INFO'] ?? '/';

$rotas = require __APP_FOLDER__ . '/routes/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

session_start();

$ehRotaDeLogin = mb_stripos($caminho, 'login');

if (!isset($_SESSION['logado']) && $caminho !== '/login' && $ehRotaDeLogin === false) {
   header('Location: /blog-php/index.php/admin/login');
   exit();
}

$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->processaRequisicao();