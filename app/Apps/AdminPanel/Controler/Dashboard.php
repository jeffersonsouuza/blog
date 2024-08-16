<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;

class Dashboard implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Dashboard';

//        $artigo = new Artigo(DatabaseConnection::create());
//        $art = $artigo->procurarPorId($_GET['id']);

        require __ADMIN_FOLDER__ . '/View/dashboard.php';
    }
}