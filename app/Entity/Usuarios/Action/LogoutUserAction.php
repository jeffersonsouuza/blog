<?php

namespace app\Entity\Usuarios\Action;

use app\Apps\InterfaceController;

class LogoutUserAction implements InterfaceController
{

    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: ' . __SYSTEM_ADMIN_URL__ . '/login');
    }
}