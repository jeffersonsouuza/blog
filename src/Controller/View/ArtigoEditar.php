<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Infra\DatabaseConnection;

class ArtigoEditar implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Editar Artigo';

        $artigo = new Artigo(DatabaseConnection::create());
        $art = $artigo->procurarPorId($_GET['id']);

        require __DIR__ . '/../../../view/editar-artigo.php';
    }
}