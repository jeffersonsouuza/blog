<?php

namespace app\Apps\AdminPanel\Controler\Artigo;

use app\Apps\InterfaceController;

class CreateController implements InterfaceController
{
    public function processaRequisicao(): void
    {
        require __ADMIN_FOLDER__ . '/View/Artigo/create.php';
    }
}