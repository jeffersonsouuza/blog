<?php

namespace app\Apps\HomePanel\Controller\Artigo;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

class IndexController implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $artigo = new Article(mysql: DatabaseConnection::create());
        $artigos = $artigo->exibirTodos();

        $title = 'Meu Blog';

        require __HOME_FOLDER__ . '/View/index.php';
    }

}