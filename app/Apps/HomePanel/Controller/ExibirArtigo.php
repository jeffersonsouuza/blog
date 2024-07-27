<?php

namespace app\Apps\HomePanel\Controller;

use app\Apps\InterfaceController;
use app\Core\Infra\DatabaseConnection;
use app\Entity\Artigos\Artigo;

class ExibirArtigo implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Meu Blog - Artigo Selecionado';

        $obj_artigo = new Artigo(mysql: DatabaseConnection::create());
        $artigo = $obj_artigo->procurarPorId($_GET['id']);

        require __HOME_FOLDER__ . '/View/exibir-artigo.php';

    }
}