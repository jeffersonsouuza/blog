<?php

namespace app\Apps\AdminPanel\Controler\Auth;

use app\Apps\InterfaceController;

class LoginController  implements InterfaceController
{
    public function processaRequisicao(): void
    {
        $title = "Login";

        require __ADMIN_FOLDER__ . '/View/Auth/login.php';
    }
}