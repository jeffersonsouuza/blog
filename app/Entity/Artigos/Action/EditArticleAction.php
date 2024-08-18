<?php

namespace app\Entity\Artigos\Action;

use app\Apps\InterfaceController;
use app\Core\DatabaseConnection;
use app\Entity\Artigos\Article;

class EditArticleAction implements InterfaceController
{

    public function processaRequisicao(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $artigo = new Article(DatabaseConnection::create());
            $artigo->editar($_POST['id'], $_POST['titulo'], $_POST['conteudo'], $_POST['status']);

            header('Location: ' . __SYSTEM_ADMIN_URL__ . '/listar-artigos');
        }
    }
}