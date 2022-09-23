<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Infra\DatabaseConnection;

class ArtigoSalvarEdicao implements InterfaceController
{

    public function processaRequisicao(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $artigo = new Artigo(DatabaseConnection::create());
            $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo'], $_POST['status']);

            header('Location: /blog-php/index.php/painel-admin');
        }
    }
}