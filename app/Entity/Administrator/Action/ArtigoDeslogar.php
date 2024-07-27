<?php

namespace app\Entity\Administrator\Action;

use app\Apps\InterfaceController;

class ArtigoDeslogar implements InterfaceController
{

    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: ' . __SYSTEM_URL__ . '/login');
    }
}