<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;
use Source\Entity\Artigo;
use Source\Infra\DatabaseConnection;

class ArtigoSelecionado implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = 'Meu Blog - Artigo Selecionado';

        $obj_artigo = new Artigo(mysql: DatabaseConnection::create());
        $artigo = $obj_artigo->procurarPorId($_GET['id']); //retorna o "id" do servidor

        require __DIR__ . '/../../../view/artigo.php';

    }
}