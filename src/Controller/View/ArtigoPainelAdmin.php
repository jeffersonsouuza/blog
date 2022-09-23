<?php

namespace Source\Controller\View;

use Source\Controller\InterfaceController;
use Source\Helper\FlashMessageTrait;

class ArtigoPainelAdmin implements InterfaceController
{
    use FlashMessageTrait;

    public function processaRequisicao(): void
    {

        $title = 'Página Admnistrativa';

        require __DIR__ . "/../../../view/admin/index.php";

    }



}