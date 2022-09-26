<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Helper\FlashMessageTrait;
use Source\Infra\DatabaseConnection;

class ArtigoPainelAdmin implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {

        $title = 'Página Admnistrativa';

        $artigo = new Artigo(mysql: DatabaseConnection::create());
        $artigos = $artigo->exibirTodos();

        require __DIR__ . "/../../../view/admin/index.php";

    }
}