<?php

namespace app\Apps\HomePanel\Controller;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Artigo;

class MostrarArtigos implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $artigo = new Artigo(mysql: DatabaseConnection::create());
        $artigos = $artigo->exibirTodos();

        $title = 'Meu Blog';

        require __HOME_FOLDER__ . '/View/listar-artigos.php';
    }

}