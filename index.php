<?php
session_start();

require __DIR__ . '/vendor/autoload.php';
require_once 'boot.php';

$caminho = $_SERVER['PATH_INFO'] ?? '/';

$rotas = require __APP_FOLDER__ . '/routes/routes.php';

if (!array_key_exists($caminho, $rotas)) {
    http_response_code(404);
    exit();
}

$ehRotaDeLogin = mb_stripos($caminho, 'login');

if (!isset($_SESSION['logado']) && $caminho !== '/login' && $ehRotaDeLogin === false) {
   header('Location: /brasatour-blog/index.php/admin/login');
   exit();
}

$classeControladora = $rotas[$caminho];
$controlador = new $classeControladora();
$controlador->processaRequisicao();