<?php

namespace app\Apps\AdminPanel\Controler\Artigo;

use app\Apps\InterfaceController;

class CreatController implements InterfaceController
{
    public function processaRequisicao(): void
    {
        $title = 'Novo Artigo';
        require __ADMIN_FOLDER__ . '/View/Artigo/creat.php';
    }
}