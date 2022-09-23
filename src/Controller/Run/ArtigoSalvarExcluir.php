<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Infra\DatabaseConnection;

class ArtigoSalvarExcluir implements InterfaceController
{

    public function processaRequisicao(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $artigo = new Artigo(DatabaseConnection::create());
            $artigo->remover($_POST['id']);

            header('Location: /blog-php/index.php/painel-admin');
        }
    }
}