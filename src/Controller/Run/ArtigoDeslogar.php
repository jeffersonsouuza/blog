<?php

namespace Source\Controller\Run;

use Source\Controller\InterfaceController;

class ArtigoDeslogar implements InterfaceController
{

    public function processaRequisicao(): void
    {
        session_destroy();
        header('Location: /blog-php/index.php/login');
    }
}