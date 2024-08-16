<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Artigo;

class EditarArtigo implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Editar Artigo';

        $artigo = new Artigo(DatabaseConnection::create());
        $art = $artigo->procurarPorId($_GET['id']);

        require __ADMIN_FOLDER__ . '/View/Artigo/editar-artigo.php';
    }
}