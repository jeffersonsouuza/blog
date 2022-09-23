<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;

class ArtigoLogin  implements InterfaceController
{

    public function processaRequisicao(): void
    {
        $title = "Login";
        require __DIR__ . '/../../../view/login/login.php';
    }
}