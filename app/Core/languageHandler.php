<?php

if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit();
}

switch ($_SESSION['lang'] ?? 'br') {
    case "en":
        require __PUBLIC_FOLDER__ . '/lang/en.php';
        break;
    case "br":
    default:
        require __PUBLIC_FOLDER__ . '/lang/pt_BR.php';
        break;
}
