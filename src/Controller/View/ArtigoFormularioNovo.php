<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;

class ArtigoFormularioNovo implements InterfaceController
{
    public function processaRequisicao(): void
    {
        $title = 'Novo Artigo';
        require __DIR__ . '/../../../view/novo-artigo.php';
    }
}