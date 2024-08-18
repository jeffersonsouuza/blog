<?php

namespace app\Apps\HomePanel\Controller\Artigo;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

class ShowController implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Meu Blog - Artigo Selecionado';

        $obj_artigo = new Article(mysql: DatabaseConnection::create());
        $artigo = $obj_artigo->procurarPorId($_GET['id']);

        require __HOME_FOLDER__ . '/View/show.php';

    }
}