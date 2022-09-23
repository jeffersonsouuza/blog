<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Infra\DatabaseConnection;

class ArtigosListar implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $artigo = new Artigo(mysql: DatabaseConnection::create());
        $artigos = $artigo->exibirTodos();

        $title = 'Meu Blog';

        require __DIR__ . '/../../../view/listar-artigos.php';
    }

}