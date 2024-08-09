<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;
use app\Core\Infra\DatabaseConnection;
use app\Entity\Artigos\Artigo;

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