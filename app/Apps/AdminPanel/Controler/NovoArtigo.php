<?php

namespace app\Apps\AdminPanel\Controler;

use app\Apps\InterfaceController;

class NovoArtigo implements InterfaceController
{
    public function processaRequisicao(): void
    {
        $title = 'Novo Artigo';
        require __ADMIN_FOLDER__ . '/View/novo-artigo.php';
    }
}