<?php

namespace app\Core;

use mysqli;

class DatabaseConnection
{
    public static function create()
    {
        $mysql = new mysqli('mysql:3306', 'root', '123456789@Abc', 'brasatour-blog');
        $mysql->set_charset('utf8');

        if ($mysql == FALSE) {
            echo "Banco Desconectado";
            die();
        }
        return $mysql;
    }
}