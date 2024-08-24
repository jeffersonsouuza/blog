<?php
global $title;
global $lang;

//+----------------------------------------------------------+
//|                 CONSTANTES DE CONFIGURAÇÃO               |
//+----------------------------------------------------------+

define("__SYSTEM_URL__", 'http://localhost:8088/brasatour-blog/index.php');
define("__SYSTEM_ADMIN_URL__", 'http://localhost:8088/brasatour-blog/index.php/admin');
define("__SYSTEM_ROOT_URL__", 'http://localhost:8088/brasatour-blog');

define("__ROOT_FOLDER__", '/var/www/html/brasatour-blog');
define("__APP_FOLDER__", __ROOT_FOLDER__ .  '/app');
define("__ADMIN_FOLDER__", __ROOT_FOLDER__ .  '/app/Apps/AdminPanel');
define("__HOME_FOLDER__", __ROOT_FOLDER__ .  '/app/Apps/HomePanel');
define("__FRAMEWORK_FOLDER__", __ROOT_FOLDER__ . "/framework");
define("__PUBLIC_FOLDER__", __ROOT_FOLDER__ . "/public");

ini_set("display_errors", 1);
//ini_set("error_reporting", E_ALL && ~E_NOTICE && ~E_DEPRECATED && ~E_WARNING);
ini_set("error_reporting", E_ALL);
ini_set('display_startup_errors', 1);
ini_set("log_errors", 1);
ini_set("error_log", __ROOT_FOLDER__."/_logs/errors/error.log");