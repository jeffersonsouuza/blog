<?php

namespace app\Apps\AdminPanel\Controler\Artigo;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

class EditController implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Editar Artigo';

        $artigo = new Article(DatabaseConnection::create());
        $art = $artigo->procurarPorId($_GET['id']);

        require __ADMIN_FOLDER__ . '/View/Artigo/edit.php';
    }
}