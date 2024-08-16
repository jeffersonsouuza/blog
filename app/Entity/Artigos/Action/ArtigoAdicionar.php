<?php

namespace app\Entity\Artigos\Action;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Artigo;

class ArtigoAdicionar implements InterfaceController
{
    public function processaRequisicao(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $artigo = new Artigo(DatabaseConnection::create());
            $artigo->adicionar($_POST['titulo'], $_POST['conteudo'], $_POST['status']);

            header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
        }
    }
}