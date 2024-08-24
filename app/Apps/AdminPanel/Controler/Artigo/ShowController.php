<?php

namespace app\Apps\AdminPanel\Controler\Artigo;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

class ShowController implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $artigo = new Article(DatabaseConnection::create());
        $art = $artigo->procurarPorId($_GET['id']);

        require __ADMIN_FOLDER__ . '/View/Artigo/show.php';
    }
}