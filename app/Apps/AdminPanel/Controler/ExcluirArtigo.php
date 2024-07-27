<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;
use app\Core\Infra\DatabaseConnection;
use app\Entity\Artigos\Artigo;

class ExcluirArtigo implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Excluir Artigo';

        $artigo = new Artigo(DatabaseConnection::create());
        $art = $artigo->procurarPorId($_GET['id']);

        require __ADMIN_FOLDER__ . '/View/excluir-artigo.php';
    }
}