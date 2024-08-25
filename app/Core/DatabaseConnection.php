<?php

namespace app\Core;

use mysqli;

class DatabaseConnection
{
    public static function create()
    {
        global $lang;

        $mysql = new mysqli('mysql:3306', 'root', '123456789@Abc', 'brasatour-blog');
        $mysql->set_charset('utf8');

        if ($mysql == FALSE) {
            echo $lang['disconnected-database'];
            die();
        }
        return $mysql;
    }
}